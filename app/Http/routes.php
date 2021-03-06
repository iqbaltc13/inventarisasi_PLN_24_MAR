<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/forgot_password', array('before' => 'csrf', 'uses' => 'WelcomeController@forgot'));
Route::post('/input_token', array('before' => 'csrf', 'uses' => 'WelcomeController@token'));
Route::post('/chgpassword2', array('before' => 'csrf', 'uses' => 'WelcomeController@ubahpassword'));
Route::get('/forgot_password',  'WelcomeController@forgot');
Route::get('/input_token',  'WelcomeController@token');
Route::get('/chgpassword2',  'WelcomeController@ubahpassword');
Route::get('/', 'WelcomeController@index');
Route::get('/c', 'HomeController@index');
Route::get('/barcode/{id}','BarangController@barcode');
Route::get('/maintenance2',function(){
  return view('maintenance2');
});

Route::get('/z', function(){
	$a="001/KER/CRB/03";
  echo DNS1D::getBarcodeHTML($a, "C39");/*$b="123";
	echo $b;
	$a=bcrypt($b);
    echo $a;*/
});
 /*App::missing(function($exception)
    {

        // shows an error page (app/views/error.blade.php)
        // returns a page not found error
        return Response::view('error', array(), 404);
    });*/


Route::get('/register', 'UserController@index');
Route::post('/create_user', array('before' => 'csrf', 'uses' => 'UserController@store'));

Route::get('/test',function(){
$username="iqbal";
$id=DB::table('users')->select('id')->where('username','=',$username )->get();



echo $id[0]->id;


/*$z="bana@gmail.com";
$y="iqbal";
$a=DB::table('users')->where('email','=',$z)->count();
$b=DB::table('users')->where('username','=',$y)->count();
$c=$a+$b;
echo $c;*/
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group( [
    'middleware' => 'auth' ,
        ] , function() {

        	
Route::get('/maintenance',function(){
  return view('maintenance');
});

Route::get('/barang', 'BarangController@index');
Route::get('/barang/create/{fid_area}', 'BarangController@create');
Route::post('/barang/create/{fid_area}', array('before' => 'csrf', 'uses' => 'BarangController@create'));
Route::get('/barang/update/{id}', 'BarangController@update');
Route::post('/barang/update/{id}', array('before' => 'csrf', 'uses' => 'BarangController@update'));
Route::post('/barang/delete/{id}', array('before' => 'csrf', 'uses' => 'BarangController@delete'));
Route::get('/barang/delete/{id}', 'BarangController@delete');
Route::get('/barang/detail/{id}', 'BarangController@detail');
Route::get('/barang/barcode/{id}','BarangController@barcode');
Route::get('/barang/allbarcode/','BarangController@allbarcode');
Route::get('/barang/search', 'BarangController@index2');
Route::post('/barang/search',array('before' => 'csrf', 'uses' => 'BarangController@search'));
Route::get('/barang/coco', 'BarangController@printpdf');
Route::post('/barang/search/forprint',array('before' => 'csrf', 'uses' => 'BarangController@forprint'));
Route::post('/barang/search/forexcel',array('before' => 'csrf', 'uses' => 'BarangController@forexcel'));
Route::post('/barang/search/allbarcode',array('before' => 'csrf', 'uses' => 'BarangController@forbarcode'));

Route::get('/barang/printpdf', 'BarangController@printpdf');
Route::get('/barang/uploadexcel', 'BarangController@uploadexcel');
Route::post('/barang/uploadexcel',array('before' => 'csrf', 'uses' =>  'BarangController@uploadexcel'));
Route::post('/barang/uploadexcel2',array('before' => 'csrf', 'uses' =>  'BarangController@uploadexcel2'));
Route::post('/barang/delete2', array('before' => 'csrf', 'uses' => 'BarangController@delete2'));
Route::get('/barang/delete2','BarangController@delete2');

Route::get('/area', 'AreaController@index');
Route::get('/area/create', 'AreaController@create');
Route::post('/area/create', array('before' => 'csrf', 'uses' => 'AreaController@create'));
Route::get('/area/update/{id}', 'AreaController@update');
Route::post('/area/update/{id}', array('before' => 'csrf', 'uses' => 'AreaController@update'));
Route::get('/area/delete/{id}', 'AreaController@delete');
Route::get('/area/detail/{id}', 'AreaController@detail');
Route::get('/area/forprint/{id}', 'AreaController@cetakbarang');
Route::get('/area/cetakexcel/{id}', 'AreaController@cetakexcel');

Route::get('/sublokasi/create/{id_area}', 'SublokasiController@create');
Route::post('/sublokasi/create/{id_area}', array('before' => 'csrf', 'uses' => 'SublokasiController@create'));
Route::get('/sublokasi/detail/{id}', 'SublokasiController@detail');
Route::get('/sublokasi/update/{id}', 'SublokasiController@update');
Route::post('/sublokasi/update/{id}', array('before' => 'csrf', 'uses' => 'SublokasiController@update'));
Route::get('/sublokasi/delete/{id}', 'SublokasiController@delete');


Route::get('/ruang', 'RuangController@index');
Route::get('/ruang/create', 'RuangController@create');
Route::post('/ruang/create', array('before' => 'csrf', 'uses' => 'RuangController@create'));
Route::get('/ruang/update/{id}', 'RuangController@update');
Route::post('/ruang/update/{id}', array('before' => 'csrf', 'uses' => 'RuangController@update'));
Route::get('/ruang/delete/{id}', 'RuangController@delete');
Route::get('/ruang/detail/{id}', 'RuangController@detail');
Route::get('/ruang/forprint/{id}', 'RuangController@cetakbarang');
Route::get('/ruang/cetakexcel/{id}', 'RuangController@cetakexcel');



Route::get('/register2', 'UserController@index2');
  Route::post('/create_user2', array('before' => 'csrf', 'uses' => 'UserController@store2'));
    	

       Route::get('/dashboard', function()
     {
        $x=Auth::user()->id;
		$sql="call login('$x')";
		DB::connection()->getPdo()->exec($sql);
        DB::commit();	
		return view('home');
		
		

	}); 


  Route::get('/logout/{id}',  'UserController@logout');

  Route::get('/editakun/{id}',  'UserController@edit');
  Route::get('/editfoto/{id}',  'UserController@editfoto');
  Route::get('/editpassword/{id}',  'UserController@editpassword');
  Route::post('/updateakun', array('before' => 'csrf', 'uses' => 'UserController@update'));
  Route::post('/updatefoto',  array('before' => 'csrf', 'uses' =>'UserController@updatefoto'));
  Route::post('/updatepassword',array('before' => 'csrf', 'uses' =>  'UserController@updatepassword'));
  Route::get('/akun/{id}',  'UserController@show');
  Route::get('/confirmrequest', 'UserController@confirm_req');
  Route::get('/confirm/{id}', 'UserController@confirm');
  Route::get('/confirm2/{id}', 'UserController@confirm2');
  Route::get('/detailakun', function(){
  
      $akun=Auth::user();   
     return view('detail_akun');   
  });
  Route::get('/deleteconfirmrequest/{id}', 'UserController@delete_confirm_req');
   Route::post('/confirm/{id}', 'UserController@confirm');
   Route::post('/confirm_search',array('before' => 'csrf', 'uses' =>'UserController@search'));
  

	

} );


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::auth();

Route::get('/home', 'HomeController@index');
