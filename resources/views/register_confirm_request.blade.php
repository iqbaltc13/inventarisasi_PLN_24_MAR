@extends('app')
 
@section('content')

  <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Cari Permintaan Konfirmasi  </div>  
        <div class="panel-body">





       {!! Form::open(array('files'=>true,'action' => 'UserController@search') ) !!}
        <div class="form-group">
        {!! Form::label('nama', 'Nama ', array('class' => 'col-md-4 control-label'))  !!}
        <div class="col-md-6">
        {!! Form::text('nama', null,array('class' => 'form-control')) !!}</div>
        </div><br/>
        
           

            <div class="form-group"><br/> <br/>
        <div class="col-md-6 col-md-offset-4">
          {!! Form::submit('Cari ', ['class'=>'btn primary']) !!}
        </div>
          {!! Form::close() !!}
          </div>
      </div>
    </div>
  </div>
</div>

    <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Permintaan Konfirmasi <a class="col-md-0 col-md-offset-7 btn btn-primary" href="register2">Tambah User Biasa /Admin</a></div>
        <div class="panel-body">
 
       <table class="table table-hover table-striped">
      <tr>
      <th>Nama</th>
    <th>Alamat</th>
    <th>Id Pegawai</th>
    <th>Telepon</th>
    
     <th>Foto</th>
    <th></th>
     <th></th>
	 <th></th>
    
    

    
        
    
  </tr>
 
  <tr>
  @foreach ( $x as $akun )
    <td>{{$akun->name}}</td>
    <td>{{$akun->alamat}}</td>
    <td>{{$akun->id_pegawai}}</td>
    <td>{{$akun->telepon}}</td>
    <td><img src="" width="50" height="50"></td>

    

    <td><a class="btn btn-primary" href="{{ url('/deleteconfirmrequest') }}/{{$akun->id}}">Hapus</a></td>
    <td><a class="btn btn-success" href="{{ url('/confirm') }}/{{ $akun->id }}">Jadikan Admin</a></td>
	<td><a class="btn btn-success" href="{{ url('/confirm2') }}/{{ $akun->id }}">Jadikan User Biasa</a></td>
 
    
    
   </tr>
    @endforeach
 

</table>

</div>
      </div>
    </div>
  </div>
</div>
@endsection