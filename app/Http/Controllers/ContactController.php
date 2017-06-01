<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\AdminWelcome;
use Auth;

class ContactController extends Controller
{
    public function index(){
        return view ('contact.index');
    }
    public function success(){

        Mail::to('ianbyh@gmail.com')->send(new AdminWelcome());
        return view ('contact.success');
    }
    // public function email(){
    //     //  send the email and redirect to page
    //     Mail::to(Auth::user()->email)->send(new AdminWelcome());
    //     return redirect ('/account');
    // }
}
    
