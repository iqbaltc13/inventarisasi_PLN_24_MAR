<?php
/*Auth::user()->role;
Auth::user()->username;
Auth::user()->status_login;
Auth::user()->status_reg;
Auth::user()->last_login;*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

/*Route::get('home', 'HomeController@index');


Route::get('/barang', 'BarangController@index');



// Route::get('/barang/create', 'BarangController@create');
Route::get('/barang/create/{fid_area}', 'BarangController@create');
Route::post('/barang/create/{fid_area}', array('before' => 'csrf', 'uses' => 'BarangController@create'));
Route::get('/barang/update/{id}', 'BarangController@update');
Route::post('/barang/update/{id}', array('before' => 'csrf', 'uses' => 'BarangController@update'));
Route::get('/barang/delete/{id}', 'BarangController@delete');
Route::get('/barang/detail/{id}', 'BarangController@detail');


Route::get('/area', 'AreaController@index');
Route::get('/area/create', 'AreaController@create');
Route::post('/area/create', array('before' => 'csrf', 'uses' => 'AreaController@create'));
Route::get('/area/update/{id}', 'AreaController@update');
Route::post('/area/update/{id}', array('before' => 'csrf', 'uses' => 'AreaController@update'));
Route::get('/area/delete/{id}', 'AreaController@delete');
Route::get('/area/detail/{id}', 'AreaController@detail');


Route::get('/ruang', 'RuangController@index');
Route::get('/ruang/create', 'RuangController@create');
Route::post('/ruang/create', array('before' => 'csrf', 'uses' => 'RuangController@create'));
Route::get('/ruang/update/{id}', 'RuangController@update');
Route::post('/ruang/update/{id}', array('before' => 'csrf', 'uses' => 'RuangController@update'));
Route::get('/ruang/delete/{id}', 'RuangController@delete');
Route::get('/ruang/detail/{id}', 'RuangController@detail');*/


Route::get('/z', function(){
	$b="123";
	echo $b;
	$a=bcrypt($b);
    echo $a;
});
 App::missing(function($exception)
    {

        // shows an error page (app/views/error.blade.php)
        // returns a page not found error
        return Response::view('error', array(), 404);
    });


Route::get('/register', 'UserController@index');
Route::post('/create_user', array('before' => 'csrf', 'uses' => 'UserController@store'));

Route::get('/test',function(){
$z="bana@gmail.com";
$y="iqbal";
$a=DB::table('users')->where('email','=',$z)->count();
$b=DB::table('users')->where('username','=',$y)->count();
$c=$a+$b;
echo $c;
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group( [
    'middleware' => 'auth' ,
        ] , function() {

        	

   get('/barang', 'BarangController@index');



// Route::get('/barang/create', 'BarangController@create');
get('/barang/create/{fid_area}', 'BarangController@create');
post('/barang/create/{fid_area}', array('before' => 'csrf', 'uses' => 'BarangController@create'));
get('/barang/update/{id}', 'BarangController@update');
post('/barang/update/{id}', array('before' => 'csrf', 'uses' => 'BarangController@update'));
get('/barang/delete/{id}', 'BarangController@delete');
get('/barang/detail/{id}', 'BarangController@detail');


get('/area', 'AreaController@index');
get('/area/create', 'AreaController@create');
post('/area/create', array('before' => 'csrf', 'uses' => 'AreaController@create'));
get('/area/update/{id}', 'AreaController@update');
post('/area/update/{id}', array('before' => 'csrf', 'uses' => 'AreaController@update'));
get('/area/delete/{id}', 'AreaController@delete');
get('/area/detail/{id}', 'AreaController@detail');


get('/ruang', 'RuangController@index');
get('/ruang/create', 'RuangController@create');
post('/ruang/create', array('before' => 'csrf', 'uses' => 'RuangController@create'));
get('/ruang/update/{id}', 'RuangController@update');
post('/ruang/update/{id}', array('before' => 'csrf', 'uses' => 'RuangController@update'));
get('/ruang/delete/{id}', 'RuangController@delete');
get('/ruang/detail/{id}', 'RuangController@detail');

    	

       get('/dashboard', function()
	{
		return view('home');
		
		

	}); 
     // var_dump(Auth::user()->role);
   /* if($role=="administrator"){  
     get('/dashboard', function()
	{
		return view('home');
	});      
     }
   
   else if($role=="native user"){
   	get('/dashboard', function()
	{
		return view('home');
	});

   }
   

	else{
		printf("user tidak valid");
		//terus logout
	}*/

	

} );
