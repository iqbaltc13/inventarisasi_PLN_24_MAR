@extends('app2')
 
@section('content')

    <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Mendaftar</div>
        <div class="panel-body">






		{!! Form::open(array('files'=>true,'action' => 'UserController@store') ) !!}
		        <div class="form-group">
				{!! Form::label('id', 'Id Pegawai', array('class' => 'col-md-4 control-label')) !!}
				<div class="col-md-6">{!! Form::text('id',null, array('class' => 'form-control')) !!}	</div>
				</div><br/><br/> <br/>
				<div class="form-group">
 				{!! Form::label('nama', 'Nama Lengkap', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!! Form::text('nama', null,array('class' => 'form-control')) !!}</div>
				</div><br/><br/> 
				<div class="form-group">
				{!! Form::label('username', 'Nama Pengguna/Username', array('class' => 'col-md-4 control-label')) !!}
				<div class="col-md-6">{!! Form::text('username',null, array('class' => 'form-control')) !!}	</div>
				</div><br/><br/> 
				<div class="form-group">
				{!! Form::label('alamat', 'Alamat', array('class' => 'col-md-4 control-label')) !!}
				<div class="col-md-6">{!! Form::text('alamat',null, array('class' => 'form-control')) !!}	</div>
				</div><br/><br/> 

				

				

                 

				<div class="form-group">
 				{!! Form::label('hp', 'Telepon/ No HP', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!! Form::text('hp', null,array('class' => 'form-control')) !!}</div>
				</div><br/><br/> 

				<div class="form-group">
 				{!! Form::label('email', 'Email', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!! Form::text('email', null,array('class' => 'form-control')) !!}</div>
				</div><br/><br/>

			        <div class="form-group">
							<label class="col-md-4 control-label">Password </label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password2">
							</div><br/><br/>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Ketik Ulang Password </label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password3">
							</div>
						</div><br/><br/><br/>

              

<div class="form-group">
  <label class="col-md-4 control-label" >Jenis Kelamin</label>
  <div class="col-md-6">
  <select class="form-control" id="sel1" name= "gender">
    <option value="L">Laki-Laki</option>
    <option value="P">Perempuan</option>
    
  </select></div>
</div> <br/> <br/>

				<div class="form-group">
 				{!! Form::label('gambar', 'Foto', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
         		 {!! Form::file('gambar',['class' => 'btn']) !!}
	  			<p class="errors">{!!$errors->first('image')!!}</p>
				
				</div>
     		   </div><br/><br/>

 
				

     		    <div class="form-group"><br/> <br/>
				<div class="col-md-6 col-md-offset-4"><br/> <br/>
    			{!! Form::submit('Daftar', ['class'=>'btn primary']) !!}
				</div>
    			{!! Form::close() !!}
    			</div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection