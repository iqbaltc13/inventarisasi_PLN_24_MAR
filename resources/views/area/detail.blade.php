@extends('app')
 
@section('content')

    <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Detail Rayon</div>
        <div class="panel-body">



  @foreach($area as $lis)   
    {!! Form::open( ['class' => 'area','files'=>true]) !!}
             <div class="form-group">
        {!! Form::label('id_rayon', 'Kode Rayon', array('class' => 'col-md-4 control-label'))  !!}
        <div class="col-md-6">
        {!! Form::text('id_rayon', $lis->kode_area,array('class' => 'form-control','readonly' => true)) !!}</div>
        </div><br/><br/> <br/>
                 <div class="form-group">
        {!! Form::label('nama_area', 'Nama Rayon', array('class' => 'col-md-4 control-label'))  !!}
        <div class="col-md-6">
        {!! Form::text('nama_area', $lis->nama_area,array('class' => 'form-control','readonly' => true)) !!}</div>
        </div><br/><br/> <br/>
        <div class="form-group">
        {!! Form::label('alamat', 'Alamat', array('class' => 'col-md-4 control-label')) !!}
        <div class="col-md-6">{!! Form::text('alamat',$lis->alamat, array('class' => 'form-control','readonly' => true)) !!}  </div>
        </div><br/><br/> 

        <div class="form-group">
        {!! Form::label('telp', 'Telepon', array('class' => 'col-md-4 control-label')) !!}
        <div class="col-md-6">{!! Form::text('telepon',$lis->telepon, array('class' => 'form-control','readonly' => true)) !!}  </div>
        </div><br/><br/>


              <div class="form group" align="center">
      
                <div class="col-md-10" align="center">
                 <?php
                  if(empty($lis->foto))
                  {
                   ?>
                  <img src="../../imgbarang/default.jpg" width="auto" height="auto">
                    
                    <?php
                  }
                    ?>
                    <?php
                    if(!empty($lis->foto))
                    {
                    ?>
                    <img src="{{URL::to(substr($lis->foto,0))}}" width="auto" height="auto">
                    <?php
                  }
                    ?>
                    
                </div>
                </div><br/><br/> 

           
                 
            <div class="form-group"><br/> <br/>
        <div class="col-md-6 col-md-offset-4"><br/> <br/>
          <a class="btn btn-default" href="../../area">Kembali</a>
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
        <div class="panel-heading">Daftar Ruangan di {{$lis->nama_area}}  &nbsp&nbsp &nbsp     <a class="btn btn-primary" href="../tambahruang/{{$lis->id_area}}">Tambah Ruang</a></div>
        @endforeach
        <div class="panel-body">
 

       <table class="table table-hover table-striped">
  <tr>

    <th>Nama Ruangan</th>
    <th></th>
    <th></th>
    <th></th>
    
        
    
  </tr>
  <tr>
    @foreach ( $ruang as $lala )
    @foreach ( $lala as $item )
    <td><a href="../../ruang/detail/{{$item->id_ruang}}">{{ $item->nama_ruang }}</a></td>
       @if(Auth::user()->role == 1 && Auth::user()->status_reg == 1)
    <td><a class="btn btn-success" href="../../ruang/update/{{ $item->id_ruang }}">Update</a></td>
    <td><a class="btn btn-primary" href="../../ruang/detail/{{ $item->id_ruang }}">Detail</a></td>
    <td><a class="btn btn-danger" href="../../ruang/delete/{{ $item->id_ruang }}">Hapus</a></td>
 
     @elseif(Auth::user()->role == 2 && Auth::user()->status_reg == 1)
       <td><a class="btn btn-primary" href="../../ruang/detail/{{ $item->id_ruang }}">Detail</a></td>
      @else()
<script> window.location = "{{ url('/auth/logout') }}"; </script>

@endif

   


     
   </tr>
   @endforeach
   @endforeach




 
</table>

</div>
      </div>
    </div>
  </div>
</div>


 <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
          @foreach($area as $lis)   
        <div class="panel-heading">Daftar Sub Lokasi di {{$lis->nama_area}}   &nbsp&nbsp &nbsp     <a class="btn btn-primary" href="../../sublokasi/create/{{$lis->id_area}}">Tambah Sub Lokasi</a></div>
        @endforeach
        <div class="panel-body">
 

       <table class="table table-hover table-striped">
  <tr>
    <th>Nama Sub Lokasi</th>
   <th></th>
   <th></th>
  <th></th>
    
        
    
  </tr>
  <tr>
    @foreach ( $sublokasi as $lele )
    @foreach ( $lele as $item2 )
    <td><a href="../../sublokasi/detail/{{$item2->id_sub}}">{{ $item2->nama_sub }}</a></td>
    @if(Auth::user()->role == 1 && Auth::user()->status_reg == 1)
    <td><a class="btn btn-success" href="../../sublokasi/update/{{ $item2->id_sub }}">Update</a></td>
    <td><a class="btn btn-primary" href="../../sublokasi/detail/{{ $item2->id_sub }}">Detail</a></td>
     <td><a class="btn btn-danger" href="../../sublokasi/delete/{{ $item2->id_sub }}">Hapus</a></td>
    <td> 

    </td>
 
     @elseif(Auth::user()->role == 2 && Auth::user()->status_reg == 1)
       <td><a class="btn btn-primary" href="../../sublokasi/detail/{{ $item2->id_sub }}">Detail</a></td>
      @else()
<script> window.location = "{{ url('/auth/logout') }}"; </script>

@endif


   


     
   </tr>
   @endforeach
   @endforeach




 
</table>

</div>
      </div>
    </div>
  </div>
</div>



  <div class="container-fluid">
  <div class="row">
    <div class="col-md-12 col-md-offset-0">
      <div class="panel panel-default">
        @foreach($area as $lis)
        <div class="panel-heading">List Barang di {{$lis->nama_area}}  &nbsp
<a class="btn btn-danger" href="../../area/forprint/{{$lis->id_area}}">PDF</a>
&nbsp
<a class="btn btn-success" href="../../area/cetakexcel/{{$lis->id_area}}">Excel</a>
&nbsp
<!-- <a class="btn btn-success" href="../../area/barcode/{{$lis->id_area}}">Barcode ruangan</a> -->
 </div>
        @endforeach
        <div class="panel-body">
 <!--           untuk checkbox -->
 <form method='POST' action='../../barang/delete2'>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<!--   untuk checkbox -->

       <table class="table table-hover table-striped table-bordered">
  <tr>
      <th>Kode Inventaris</th>
    <th>Nama Barang</th>
    <th>Merek</th>
    <th>Tahun</th>
    <th>Jumlah</th>
     <th>Satuan</th>
   <th>Ruangan</th>
   <th>Sub Lokasi</th>
    <th>Fisik</th>
    <th>Keterangan</th>
    @if(Auth::user()->role == 1 && Auth::user()->status_reg == 1)
    <th></th>
    <th></th>
    <th></th>
    <th><a class="btn btn-danger" onClick="myFunction2()" \>Hapus</a></th>
@elseif(Auth::user()->role == 2 && Auth::user()->status_reg == 1)
    <th></th>
 @else()
echo "akun anda belum dikonfirmasi";

@endif
  </tr>
 @foreach ( $barang as $lolo )
 @foreach ( $lolo as $item2 )
 
  <tr >
    
                <td >
                    {{ $item2->nomor_inventaris }}
                </td>
                 
                 <td>
                    {{ $item2->nama_barang }} </a>
                 </td>

               <!--  <td>
              
                   <img src="{{URL::to(substr($item->gambar,0))}}" style="width:50%">
                </td> -->
                <td>
                 {{ $item2->merek }} 
                </td>
                  <td>
                 {{ $item2->tahun }} 
                </td>
                </td>
                
                <td>
                  {{ $item2->jumlah }}
                </td>
                  <td>
                  {{ $item2->satuan }}
                </td>
                <td>
                  {{ $item2->ruang->nama_ruang }}
                </td>
                 <td>
                  {{$item2->sublokasi->nama_sub}}
                 </td>
                <td>
              {{ $item2->fisik }}
                </td>
                </td>
                <td>
          {{ $item2->keterangan }}
                </td>
                </td>
   @if(Auth::user()->role == 1 && Auth::user()->status_reg == 1)
    <td><a class="btn btn-success" href="../../barang/update/{{ $item2['id_barang'] }}">Update</a></td>
    <td><a class="btn btn-primary" href="../../barang/detail/{{ $item2['id_barang'] }}">Detail</a></td>
    <td><a class="btn btn-info" href="../../barang/barcode/{{ $item2['id_barang'] }}">Barcode</a></td>
  <td> 
<?php
echo Form::checkbox('checked[]', $item2->id_barang);
 
?>
    </td>
 
     @elseif(Auth::user()->role == 2 && Auth::user()->status_reg == 1)
       <td><a class="btn btn-primary" href="../../barang/detail/{{ $item2['id_barang'] }}">Detail</a></td>
      @else()
<script> window.location = "{{ url('/auth/logout') }}"; </script>

@endif
     
   </tr>
    @endforeach
   @endforeach



  
 
</table>
<!-- untuk checkbox -->
   <button id='hap' type="submit" hidden>Submit!</button>
</form>
<!-- untuk checkbox -->

</div>
      </div>
    </div>
  </div>
</div>
@endsection

