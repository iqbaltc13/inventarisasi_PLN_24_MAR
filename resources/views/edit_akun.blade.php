@extends('app')
 
@section('content')

    <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Ubah Akun</div>
        <div class="panel-body">




         @foreach($x as $akun)
		{!! Form::open(array('files'=>true,'action' => 'UserController@update') ) !!}
		
		        <div class="form-group">
				{!! Form::label('id', 'Id Pegawai', array('class' => 'col-md-4 control-label')) !!}
				<div class="col-md-6">{!! Form::text('id',$akun->id_pegawai, array('class' => 'form-control','readonly'=> true)) !!}	</div>
				</div><br/><br/><br/>
				<div class="form-group">
 				{!! Form::label('nama', 'Nama Lengkap', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!! Form::text('nama', $akun->name,array('class' => 'form-control')) !!}</div>
				</div><br/><br/> 
				<div class="form-group">
				{!! Form::label('username', 'Nama Pengguna/Username', array('class' => 'col-md-4 control-label')) !!}
				<div class="col-md-6">{!! Form::text('username',$akun->username, array('class' => 'form-control','readonly'=> true)) !!}	</div>
				</div><br/><br/> 
				<div class="form-group">
				{!! Form::label('alamat', 'Alamat', array('class' => 'col-md-4 control-label')) !!}
				<div class="col-md-6">{!! Form::text('alamat',$akun->alamat, array('class' => 'form-control')) !!}	</div>
				</div><br/><br/> 

				

				

                 

				<div class="form-group">
 				{!! Form::label('hp', 'Telepon/ No HP', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!! Form::text('hp',$akun->telepon,array('class' => 'form-control')) !!}</div>
				</div><br/><br/> 

				<div class="form-group">
 				{!! Form::label('email', 'Email', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!! Form::text('email', $akun->email,array('class' => 'form-control')) !!}</div>
				</div><br/><br/>

			       



 
				

     		    <div class="form-group"><br/> <br/>
				<div class="col-md-6 col-md-offset-4"><br/> <br/>
    			{!! Form::submit('Ubah', ['class'=>'btn primary']) !!}
				</div>
    			{!! Form::close() !!}
    			@endforeach
    			</div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection