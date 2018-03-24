@extends('app')
 
@section('content')

    <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Ubah Foto</div>
        <div class="panel-body">




         @foreach($x as $akun)





{!! Form::open(array('files'=>true,'action' => 'UserController@updatefoto') ) !!}

            <div class="form-group">
 				{!! Form::label('gambar', 'Foto', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
         		 {!! Form::file('gambar',['class' => 'btn']) !!}
	  			<p class="errors">{!!$errors->first('image')!!}</p>
				
				</div>
     		   </div><br/><br/>

     		   
				
				
     		   <div class="form group">
                {!! Form::label('foto', 'Foto Sekarang', array('class' => 'col-md-4 control-label')) !!}
                <div class="col-md-6">
                    <img src="<?php echo URL::to(substr($akun->foto,0)); ?>" width="100" height="100" style="margin-left:2%;width:30%">
                    
                </div>
            </div><br/><br/> 

            <div class="col-md-6">{!! Form::hidden('username',$akun->username, array('class' => 'form-control')) !!}
                </div>

 
				

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
@endsection