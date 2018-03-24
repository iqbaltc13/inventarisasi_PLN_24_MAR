<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Area;
use App\Models\Ruang;
use Input;
use Request;
use DB;
use View;
use Redirect;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        if(Request::isMethod('post'))
        {
            $data = Input::all();
            $a=DB::table('users')->where('email','=',$data['email'])->count();
            $b=DB::table('users')->where('email','=',$data['username'])->count();
            $c=$a+$b; 

            $rules = array(
            'nama'=>'required|max:255',
           'email' => 'required|email|unique:users',
           'username' => 'required|unique:users',
           'password2' => 'required|same:password3',
           'id'=>'required|unique:users',
           'alamat'=>'required|max:50',
           'gender'=>'required',
           'hp'=>'required',
            'password3'=>'required|same:password2',
            'gambar'=>'required',);
            $validation = Validator::make(Input::all(), $rules);
            if ($validation->fails())
             {
             return Redirect::to('/register')->withErrors($validation)->withInput();
             }

             else{
                $data = Input::all();
                $destinationPath = 'imgbarang'; // upload path
                    $extension = Input::file('gambar')->getClientOriginalExtension(); // getting image extension
                    $fileName = rand(11111,99999).'.'.$extension; // renaming image
                    Input::file('gambar')->move($destinationPath, $fileName);
                    $foto=$destinationPath. '/'.$fileName;

             $id=$data['id'];
             $name=$data['nama'];
             $username=$data['username'];
             $alamat=$data['alamat'];
             $telepon=$data['hp'];
             $email=$data['email'];
             $password=bcrypt($data['password2']);
             $confirm_password=bcrypt($data['password3']);
             $gender=$data['gender']; 
             $sql="call register_native_user('$name','$email','$confirm_password',null,'$id','$telepon','$gender','$foto','$username','$alamat')";
             DB::connection()->getPdo()->exec($sql);
             DB::commit();
             return Redirect::to('/auth/login');

             }


             /*if (!empty($data['gambar']) && !empty($data['id'])&& !empty($data['nama']) && !empty($data['username']) && !empty($data['alamat']) && !empty($data['hp']) && !empty($data['email']) 
                  &&!empty($data['password2']) && !empty($data['password3']) && !empty($data['gender']) && !empty($data['gambar']) && $data['password3']==$data['password2'] && 
                  strpos($data['email'], '/') !== false && strpos($data['username'], '/') !== false  && strpos($data['username'], '%') !== false  && strpos($data['email'], '%') !== false && $c==0) {
                    $destinationPath = 'imgbarang'; // upload path
                    $extension = Input::file('gambar')->getClientOriginalExtension(); // getting image extension
                    $fileName = rand(11111,99999).'.'.$extension; // renaming image
                    Input::file('gambar')->move($destinationPath, $fileName);
                    $foto=$destinationPath. '/'.$fileName;

             $id=$data['id'];
             $name=$data['nama'];
             $username=$data['username'];
             $alamat=$data['alamat'];
             $telepon=$data['hp'];
             $email=$data['email'];
             $password=bcrypt($data['password2']);
             $confirm_password=bcrypt($data['password3']);
             $gender=$data['gender']; 
             $sql="call register_native_user('$name','$email','$confirm_password',null,'$id','$telepon','$gender','$foto','$username')";
             DB::connection()->getPdo()->exec($sql);
             DB::commit();

         exit();    }
            /*else if($data['password3']!=$data['password2']){
                printf("password dan ketik ulang password tidak sama");

            }
            else if($c!=0)
            {
                printf("username atau email sudah ada, coba yang lain");
            }
            else {
               // printf("aaa");
            printf("tidak boleh ada yang kosong atau tidak boleh ada karakter  (/) dan atau (') dan atau karakter persen dalam username atau email");
            
            }*/

             
             
             

       
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
