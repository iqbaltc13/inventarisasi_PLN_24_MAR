@extends('app')
 
@section('content')

    <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">{{Auth::user()->username}}</div>
        <div class="panel-body">






		{!! Form::open() !!}
		        <div class="form-group">
				{!! Form::label('id', 'Id Pegawai', array('class' => 'col-md-4 control-label')) !!}
				<div class="col-md-6">{!! Form::text('id',Auth::user()->id_pegawai, array('class' => 'form-control', 'readonly'=>true)) !!}	</div>
				</div><br/><br/> <br/> 
				<div class="form-group">
 				{!! Form::label('nama', 'Nama Lengkap', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!! Form::text('nama', Auth::user()->name,array('class' => 'form-control', 'readonly'=>true)) !!}</div>
				</div><br/> 
				<div class="form-group">
				 
				<div class="form-group">
				{!! Form::label('alamat', 'Alamat', array('class' => 'col-md-4 control-label')) !!}
				<div class="col-md-6">{!! Form::text('alamat',Auth::user()->alamat, array('class' => 'form-control', 'readonly'=>true)) !!}	</div>
				</div><br/><br/> <br/>

				

				

                 

				<div class="form-group">
 				{!! Form::label('hp', 'Telepon/ No HP', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!! Form::text('hp',Auth::user()->telepon,array('class' => 'form-control', 'readonly'=>true)) !!}</div>
				</div><br/><br/> 

				<div class="form-group">
 				{!! Form::label('email', 'Email', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!! Form::text('email', Auth::user()->email,array('class' => 'form-control', 'readonly'=>true)) !!}</div>
				</div><br/><br/>
                 

                 <div class="form-group">
 				{!! Form::label('jk', 'Email', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!! Form::text('jk',Auth::user()->jenis_kelamin ,array('class' => 'form-control', 'readonly'=>true)) !!}</div>
				</div><br/><br/>

				<div class="form group">
                {!! Form::label('foto', 'Foto Sekarang', array('class' => 'col-md-4 control-label')) !!}
                <div class="col-md-6">
                 <img src="<?php echo URL::to(substr(Auth::user()->foto,0)); ?>" width="100" height="100" style="margin-left:2%;width:30%">
                    
                </div>
            </div><br/><br/> 
            
			     

              



				

 
				

     		    
      </div>
    </div>
  </div>
</div>
@endsection