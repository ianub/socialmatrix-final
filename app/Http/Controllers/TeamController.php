<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teams;
use Intervention\Image\ImageManagerStatic as Image;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
 
        // Get most popular team
        $allTeam = Teams::all();
        // Show the most popular team
        return view('team.index', compact('allTeam'));
    
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        // Get all the categories to show on the form
        // $allTeam = Teams::pluck('id', 'image', 'first_name', 'last_name', 'position', 'description');
        // return view('team.create', compact('allTeam'));
        $allTeam = Teams::all();
        return view('team.create', compact('allTeam'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validate the data
        $this->Validate($request, [
            'image'         => 'required|image',
            'first_name'          => 'required',
            'last_name'           => 'required',
            'position'      => 'required|min:2',
            'description'   => 'required|min:20'
        ]);

        // Making a copy of the file that was uploaded
        $image = Image::make($request->image)->resize(200, 200);

        switch($image->mime){
            case 'image/jpeg':
            case 'image/jpg':
                $fileExtension = '.jpg';
            break;

            case 'image/png':
                $fileExtension = '.png';
            break;

            case 'image/gif':
                $fileExtension = '.gif';
            break;
        }
        
        // Generate new file name
        $filename = uniqid().$fileExtension;

        // Save the image
        $image->save("images/team/$filename");

        $newMember = $request->all();
        $newMember['image'] = $filename;

        

        // Save the data

        $newMember = new Teams();

        $newMember->first_name = $request['first_name'];
        $newMember->last_name = $request['last_name'];
        $newMember->image = $filename;
        $newMember->position = $request['position'];
        $newMember->description = $request['description'];

        $newMember->save();

        // Redirect away to some other pages
        return redirect('/team/#team1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Teams::findOrFail($id);
        return view('team.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the data
            $this->Validate($request, [
            'image'         => 'image',
            'first_name'          => 'required',
            'last_name'           => 'required',
            'position'      => 'required|min:2',
            'description'   => 'required|min:20'
        ]);

        // Find the product that is being updated
        $member = Teams::findOrFail($id);

        // Override the values with new ones
        $member->first_name = $request['first_name'];
        $member->last_name = $request['last_name'];
        
        $member->position = $request['position'];
        $member->description = $request['description'];


        // Did the user upload an image?
        if($request->hasFile('image')){
            // Upload the new one
                // Making a copy of the file that was uploaded
                $image = Image::make($request->image)->resize(200, 200);

                switch($image->mime){
                    case 'image/jpeg':
                    case 'image/jpg':
                        $fileExtension = '.jpg';
                    break;

                    case 'image/png':
                        $fileExtension = '.png';
                    break;

                    case 'image/gif':
                        $fileExtension = '.gif';
                    break;
                }

                // Generate new file name
                $filename = uniqid().$fileExtension;

                // Save the image
                $image->save("images/team/$filename");


            // Make sure the file has successfully uploaded
            // Remove the old one
                unlink('images/team/'.$member->image);
            // Save the new filename
                $member->image = $filename;

        }

        // Save
        $member->save();

        // Redirect back to product page
        return redirect('/team/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Teams::findOrFail($id);
        $member->delete();

        return redirect('/team/#team1');
    }
}
