@extends('app')
 
@section('content')

    <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Welcome {{Auth::user()->username}} !!</div>
        <div class="panel-body">

                
@if(Auth::user()->role == 1 && Auth::user()->status_reg == 1)
<a href="{{ url('/detailakun') }}" class="btn btn-primary btn-lg btn-block">Akun </a>
<a href="{{ url('/area') }}" class="btn btn-default btn-lg btn-block">Rayon</a>
<a href="{{ url('/barang') }}" class="btn btn-primary btn-lg btn-block">Inventaris</a>
<a href="{{ url('/confirmrequest') }}" class="btn btn-default btn-lg btn-block">Kelola Akun</a>
<a href="{{ url('/ruang') }}" class="btn btn-primary btn-lg btn-block">Ruangan</a>
@elseif(Auth::user()->role == 2 && Auth::user()->status_reg == 1)
<a href="{{ url('/detailakun') }}"  class="btn btn-primary btn-lg btn-block">Akun </a>
<a href="{{ url('/area') }}"  class="btn btn-default btn-lg btn-block">Rayon</a>
<a href="{{ url('/barang') }}"  class="btn btn-primary btn-lg btn-block">Inventaris</a>

<a href="{{ url('/ruang') }}"  class="btn btn-default btn-lg btn-block">Ruangan</a>
@else()
<script> window.location = "{{ url('/auth/logout') }}"; </script>

@endif

      </div>
    </div>
  </div>
</div>
@endsection