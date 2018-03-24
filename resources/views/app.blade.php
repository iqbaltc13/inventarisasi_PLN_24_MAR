
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PLN</title>

	<link href="{{ asset('/public/css/app.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{URL::to('/public')}}/css/coba.js"> </script>
	<link rel="stylesheet" type="text/css" href="{{ asset('/public/css/sweetalert.css') }}">
	<script src="{{URL::to('/public')}}/css/sweetalert.min.js"></script>
	@include('sweet::alert')
	
	

<script type="text/javascript">


    // my custom script
function doReload(catid){
	document.location = '' + catid;
	
	/* But if you want to submit the form just comment above line and uncomment following lines*/
	//document.frm1.action = 'samepage.php';
	//document.frm1.method = 'post';
	//document.frm1.submit();
}

</script>
<script> function myFunction(x){ 
  swal({   title: "Konfirmasi penghapusan", 
    text: "", 
      type: "warning", 
        showCancelButton: true,  
         confirmButtonColor: "#DD6B55", 
           confirmButtonText: "Iya",
              closeOnConfirm: false }, 
              function(){
                 // swal("Deleted!", "Your imaginary file has been deleted.", "success");
                  document.getElementById(x).click(); });}
  </script>
<script> function myFunction2(){ 
  swal({   title: "Konfirmasi penghapusan", 
    text: "", 
      type: "warning", 
        showCancelButton: true,  
         confirmButtonColor: "#DD6B55", 
           confirmButtonText: "Iya",
              closeOnConfirm: false }, 
              function(){
                 // swal("Deleted!", "Your imaginary file has been deleted.", "success");
                  document.getElementById('hap').click(); });}
  </script>
<script> function myFunction3(x){ 
                  document.getElementById(x).click();
              }
  </script>


<script type="text/javascript">
    // my custom script
function processClick(haha){
	sweetAlert({
		title:"",
		text:"Konfirmasi",
		type:"",
		showCancelButton:true;
		confirmButtonColor:"#009999",
		confirmButtonText:"Konfirmasi",
		cancelButtonText:"Batal",
		closeOnConfirm:true,
		closeOnCancel:true

	}),
	function(response{
		if(response==true){
			console.log('Konfirmasi Sukses');
		}

	});
	
	
	/* But if you want to submit the form just comment above line and uncomment following lines*/
	//document.frm1.action = 'samepage.php';
	//document.frm1.method = 'post';
	//document.frm1.submit();
}

</script>
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body background="{{ asset('/public/css/2.jpeg') }}">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Inventaris PT PLN(persero)</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/dashboard') }}">Menu Utama</a></li>
					<li><a href="{{ url('/barang') }}">Inventaris</a></li>
					<li><a href="{{ url('/area') }}">Rayon</a></li>
					<li><a href="{{ url('/ruang') }}">Ruangan</a></li>
					<li><a href="{{ url('/maintenance') }}">Maintenance</a></li>
					


				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/register') }}">Register</a></li>
					@else
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->username }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
					<li><a href="{{ url('/logout') }}/{{ Auth::user()->username }}">Keluar</a></li>
								<li><a href="{{ url('/detailakun') }}">Detail Akun</a></li>
								<li><a href="{{ url('/editakun') }}/{{ Auth::user()->id }}">Ubah Akun </a></li>
								<li><a href="{{ url('/editpassword') }}/{{ Auth::user()->id }}">Ubah Password </a></li>
								<li><a href="{{ url('/editfoto') }}/{{ Auth::user()->id }}">Ubah Foto </a></li>

							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
<script src="{{URL::to('/public')}}/css/sweetalert.min.js"></script>
	@include('sweet::alert')
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
