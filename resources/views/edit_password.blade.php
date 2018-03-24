@extends('app')
 
@section('content')

    <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Ubah Password     ,Masukkkkan password baru</div>
        <div class="panel-body">




         @foreach($x as $akun)





{!! Form::open(array('files'=>true,'action' => 'UserController@updatepassword') ) !!}

                   <div class="form-group">
                            <label class="col-md-4 control-label">Password  </label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password2">
                            </div><br/><br/>
                        </div>

                  <div class="form-group">
                            <label class="col-md-4 control-label">Ketik Ulang Password  </label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password3">
                            </div><br/><br/>
                        </div>

     		   
				
				
     		  
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