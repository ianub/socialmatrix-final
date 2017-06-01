<?php
use Illuminate\Support\Facades\Input as input;
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 	 	'HomeController@index');
Route::get('/home', 	'HomeController@index');

Route::get('/team', 	'TeamController@index');
Route::get('/team/create', 'TeamController@create');
Route::post('/team/store', 'TeamController@store');
Route::post('/team/update/{id}', 'TeamController@update');
Route::get('/team/edit/{id}', 'TeamController@edit');
Route::get('/team/delete/{id}', 'TeamController@destroy');

Route::get('/services', 'ServicesController@index');

Route::get('/prices', 	'PricesController@index');
Route::get('/prices/create', 	'PricesController@create');
Route::post('/prices/store', 	'PricesController@store');
Route::post('/prices/update/{id}', 	'PricesController@update');
Route::get('/prices/edit/{id}', 	'PricesController@edit');
Route::get('/prices/delete/{id}', 	'PricesController@delete');

Route::get('/contact', 	'ContactController@index');
Route::post('/contact/success', 'ContactController@success');

Route::get('/email', 'LoginController@email')->name('sendEmail');

Route::get('/changepassword', function(){
	return view('auth.changepassword');
});
Route::post('change/password', function(){
	$User = user::find(Auth::user()->id);

	if(Hash::check(Input::get('passwordold'), $User['password']) && Input::get('password') == Input::get('password_confirmation')){
		$User->password = bcrypt(Input::get('password'));
		$User->save();
		return back()->with('success','Password Changed');
	} else {
		return back()->with('error','Password NOT Changed');
	}

});

Route::get('/logout', function(){

	Auth::logout();
	return redirect('/');

});

Auth::routes();

Route::get('/account', 'AccountController@index');