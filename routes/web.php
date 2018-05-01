<?php

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

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

//Route::get('cricketers', 'CricketersController@index');
//Route::get('cricketers/{name}', 'CricketersController@show');
//Route::get('cricketers/create', 'CricketersController@create');
Route::resource('cricketers', 'CricketersController');

Route::post('cricketers/store', 'CricketersController@store');

Route::get('/', function()
{
	// Using user all, find
	//$users = DB::table('users')->where('username', '!=', 'Jeffrey') -> get();
	//$users = User::where('username', '!=', 'Jeffrey')->get();
	//$users = User::all();
    //$user = DB::table('users')->find(1);
    //$user = User::find(1);
    
    // Creating a new user method 1
    //$user = new User;
    //$user->username = 'NewUser';
    //$user->password = Hash::make('password');

    //$admin = new User;
    //$admin->username = 'Admin';
    //$user->password = Hash::make('password');
	//return $user;
	//$user->save();
    
    // Creating aq new user method 2
	//User::create([
	//	'username' => 'AnotherUser',
	//	'password' => Hash::make('1234')
	//]);

	// Updating a user
	//$user = User::find(2);
	//$user->username = 'UpdatedName';
	//$user->save();
	
	// Deleting a user
	//$user = User::find(2);
	//$user -> delete();

	// Order by the username in alphabetical order
    //return User::orderBy('username', 'asc')->take(2)->get();

    //$lala = Cricketer::where('number_of_sixes', '>', '470')->get();
    
	return View::make('cricketers.homepage');
    //return Cricketer::orderBy('number_of_sixes', 'desc')->get();

    //return User::all();

});


Route::get('/about', function () {
    return view('about');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/