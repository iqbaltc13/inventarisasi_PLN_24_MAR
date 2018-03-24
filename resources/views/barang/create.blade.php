@extends('app')
 
@section('content')








    <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Tambah Aktiva</div>
        <div class="panel-body">

       

		{!! Form::open( ['files'=>true]) !!}

				              <div class="form-group">
  <label class="col-md-4 control-label" >Rayon</label>
  <div class="col-md-6">	
				<select name='fid_area' onChange="doReload(this.value);" class="form-control">
<!--  -->
					@foreach($pilih as $terpilih)
					<option value="{{$terpilih->id_area}}" selected>
						{{$terpilih->nama_area}}
					</option>
					@endforeach

					@foreach($area as $item)
					@foreach($item as $item2)
					<?php
					if($terpilih->id_area!=$item2->id_area){
					?>
					<option value="{{$item2->id_area}}">
						{{$item2->nama_area}}
					</option>
					<?php
					}	
					?>
					@endforeach
					@endforeach
				</div>
</div> <br/> <br/><br/><br/> 

<div class="form-group">
  <label class="col-md-4 control-label" ></label>
  <div class="col-md-6">
  <select class="form-control" >
    <option></option>
    <option></option>
  </select></div>
</div> <br/> <br/>


				<div class="form-group">
  <label class="col-md-4 control-label" >Ruangan</label>
   <div class="col-md-6">	
					<select name='ruang'  class="form-control">
							@foreach($ruang as $item3)
							@foreach($item3 as $item4)
						<option value="{{$item4->id_ruang}}">
							{{$item4->nama_ruang}}
						</option>
						@endforeach
						@endforeach
					
					
				</div>
</div> <br/> <br/>

<div class="form-group">
  <label class="col-md-4 control-label" >Ruangan</label>
  <div class="col-md-6">
  <select class="form-control" >
    <option></option>
    <option></option>
  </select></div>
</div> <br/> <br/>

			<div class="form-group">
  <label class="col-md-4 control-label" >Sub Lokasi</label>
   <div class="col-md-6">	
					<select name='sublokasi'  class="form-control">
						<option value="-1" selected>

						</option>

							@foreach($sublokasi as $item5)
							@foreach($item5 as $item6)
						<option value="{{$item6->id_sub}}">
							{{$item6->nama_sub}}
						</option>
						@endforeach
						@endforeach
					
					
				</div>
</div> <br/> <br/>

<div class="form-group">
  <label class="col-md-4 control-label" >Sublokasi</label>
  <div class="col-md-6">
  <select class="form-control" >
    <option></option>
    <option></option>
  </select></div>
</div> <br/> <br/>


	

				<div class="form-group">
 				{!! Form::label('nama_barang', 'Nama Barang', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!! Form::text('nama_barang', null,array('class' => 'form-control')) !!}</div>
				</div><br/><br/> <br/>

				<ul>
					<li style="visibility:hidden">aaa</li>
				</ul>

				<div class="form-group">
				{!! Form::label('merek', 'Merek', array('class' => 'col-md-4 control-label')) !!}
				<div class="col-md-6">{!! Form::text('merek',null, array('class' => 'form-control')) !!}	</div>
				</div><br/><br/> 

				<ul>
					<li style="visibility:hidden">aaa</li>
				</ul>

				<div class="form-group">
				{!! Form::label('tahun', 'Tahun', array('class' => 'col-md-4 control-label')) !!}
				<div class="col-md-6">{!! Form::input('number','tahun',null, array('class' => 'form-control')) !!}	</div>
				</div><br/><br/> 

				<ul>
					<li style="visibility:hidden">aaa</li>
				</ul>

				<div class="form-group">
 				{!! Form::label('gambar', 'Gambar Barang', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
         		 {!! Form::file('gambar',['class' => 'form-control']) !!}

	  			<p class="errors">{!!$errors->first('image')!!}</p>
				
				</div>
     		   </div>

 
     		   <ul>
					<li style="visibility:hidden">aaa</li>
				</ul>
<ul>
					<li style="visibility:hidden">aaa</li>
				</ul>

     		   <div class="form-group">
 				{!! Form::label('jumlah', 'Jumlah', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!!Form::input('number', 'jumlah',  1, array('class' => 'form-control')) !!}
				</div>
     		   </div><br/><br/> <br/>


     		   <div class="form-group">
				{!! Form::label('satuan', 'Satuan', array('class' => 'col-md-4 control-label')) !!}
				<div class="col-md-6">{!! Form::select('satuan',['buah'=>'Buah','set'=>'Set','unit'=>'Unit'], array('class' => 'form-control')) !!}	</div>
				</div><br/><br/> 



     		   <div class="form-group">
				{!! Form::label('fisik', 'Fisik', array('class' => 'col-md-4 control-label')) !!}
				<div class="col-md-6">{!! Form::select('fisik',['baik'=>'Baik','kurang baik'=>'Kurang Baik','rusak'=>'Rusak'], array('class' => 'form-control')) !!}	</div>
				</div><br/>


				<div class="form-group">
 				{!! Form::label('keterangan', 'Keterangan', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!! Form::textarea('keterangan', null,array('class' => 'form-control'),'') !!}</div>
				</div><br/><br/> <br/> <br/><br/> <br/>


     		    <div class="form-group"><br/> <br/>
				<div class="col-md-6 col-md-offset-4"><br/> <br/>
    			{!! Form::submit('Tambah Barang', ['class'=>'btn primary']) !!}
				</div>
    			{!! Form::close() !!}
    			</div>
      </div>
    </div>
  </div>
</div>
@endsection