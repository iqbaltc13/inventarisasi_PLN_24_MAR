    
 @extends('app')
 
@section('content')

 <!--  <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Cari Rayon/Area</div>
        <div class="panel-body">






    {!! Form::open( ) !!}
        <div class="form-group">
        {!! Form::label('nama_area', 'Nama Rayon/Area', array('class' => 'col-md-4 control-label'))  !!}
        <div class="col-md-6">
        {!! Form::text('nama_barang', null,array('class' => 'form-control')) !!}</div>
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
</div> -->

    <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">List Rayon</div>
        <div class="panel-body">
 
       <table class="table table-hover table-striped table-bordered">
  <tr>
      <th>Kode Rayon/Area</th>
    <th>Nama Rayon/Area</th>
    <th>Alamat</th>
    <th>Telepon</th>
    

  @if(Auth::user()->role == 1 && Auth::user()->status_reg == 1)
    <th></th>
    <th></th>  
    <th></th>
   @elseif(Auth::user()->role == 2 && Auth::user()->status_reg == 1)
    <th></th>
  @else()
   echo "akun anda belum dikonfirmasi";

    @endif
    
        
    
  </tr>
 @foreach ( $area as $item )
  <tr>
    
    <td>{{ $item->kode_area }}</td>
    <td>{{ $item->nama_area }}</td>
    <td>{{ $item->alamat }}</td>
    <td>{{ $item->telepon }}</td>
    

  @if(Auth::user()->role == 1 && Auth::user()->status_reg == 1)

    <td><a class="btn btn-success" href="area/update/{{ $item['id_area'] }}">Update</a></td>
    <td><a class="btn btn-primary" href="area/detail/{{ $item['id_area'] }}">Kelola</a></td>
    <td><a class="btn btn-danger" onClick="myFunction({{$item['id_area']}})" >Hapus</a></td>
    <td hidden><a class="btn btn-danger" id="{{ $item['id_area'] }}" href="area/delete/{{ $item['id_area'] }}">Hapus</a></td>
   @elseif(Auth::user()->role == 2 && Auth::user()->status_reg == 1)
    <td><a class="btn btn-primary" href="area/detail/{{ $item['id_area'] }}">Detail</a></td>
   @else()
<script> window.location = "{{ url('/auth/logout') }}"; </script>

    @endif
   </tr>
   @endforeach



  
 
</table>
 <?php echo $area->render(); ?>

<p><a class="btn btn-default" href="area/create">Tambah Rayon</a></p>
</div>
      </div>
    </div>
  </div>
</div>
@endsection