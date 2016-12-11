<!DOCTYPE html> 
<html lang="en">
	<head> 
	<title>Home</title>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script>
    $('.dropdown-toggle').dropdown()
</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Fonts -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <style>
    html, body {font-family: 'Lato'; 
	background-color: #E3FEF5}
	.col-lg-2 {width: 16.66%;
			height: 100%;}
	.col-lg-8 {width: 66.66%;
			height: 100%;}
	.fa-btn { margin-right: 6px;}
    .navbar { background-color: #24F5B5  
	</style>
</head>
<body>
	<div class="container">
	  <nav class="navbar navbar-fixed-top navbar-default">
	    <div class="container">
	        <div class="navbar-header">
	          <a class="navbar-brand" href="{{ url('/') }}">E-store</a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	        <ul class="nav navbar-nav">
	            <li>
	                <a href="{{ url('laptop') }}">Laptop</a>
	            </li>
	            <li class="dropdown">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Aksesoris
	                   
	                    <span class="caret"></span></a>
	                    <ul class="dropdown-menu">
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('aksesoris/keyboard') }}">Keyboard</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('aksesoris/headset') }}">Headset</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('aksesoris/mouse') }}">Mouse</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('aksesoris/speaker') }}">Speaker</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('aksesoris/external_hdd') }}">External HDD</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('aksesoris/mouse_pad') }}">Mouse Pad</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('aksesoris/memory_card') }}">Memory Card</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('aksesoris/ups') }}">UPS</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('aksesoris/stabilizer') }}">Stabilizer</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('aksesoris/modem') }}">Modem</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('aksesoris/printer') }}">Printer</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('aksesoris/flashdisk') }}">Flashdisk</a></li>
	                     <li role="presentation" class="divider"></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('aksesoris') }}">All Aksesoris</a></li>
	                    </ul>
	            </li>
	            <li class="dropdown">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Komponen   
	                    <span class="caret"></span></a>
	                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu2">
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('komponen/processor') }}">Processor</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('komponen/ram') }}">RAM</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('komponen/motherboard') }}">Motherboard</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('komponen/harddisk') }}">Harddisk</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('komponen/power_supply') }}">Power Supply</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('komponen/monitor') }}">Monitor</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('komponen/vga') }}">VGA</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('komponen/casing') }}">Casing</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('komponen/os') }}">OS</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('komponen/software') }}">Software</a></li>
	                     <li role="presentation" class="divider"></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('komponen') }}">All Komponen</a></li>
	                    </ul>
	            </li>
	        </ul>
	        <ul class="navbar-form navbar-right">
	        	<form action = "{{url('/search')}}" method = "post">
	        		{{ csrf_field() }}
		        	<div class="form-group">
		           		<input type="text" class="form-control" name="search"  placeholder="search">
	    	    	</div>
		        	<button type="submit" class="btn btn-success" name="submit">
	    	        	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
	        		</button>
	        	</form>
	        </ul>
	        </div>
	    </div>
	  </nav>
	</div>
	<br><br><br>
	@yield('pages')
	</body>
</html>