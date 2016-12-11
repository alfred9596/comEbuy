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
	.fa-btn { margin-right: 6px;}
    .col-md-2{ background-color: #fff;}
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
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('keyboard') }}">Keyboard</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('headset') }}">Headset</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('mouse') }}">Mouse</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('speaker') }}">Speaker</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('external_hdd') }}">External HDD</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('mouse_pad') }}">Mouse Pad</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('memory_card') }}">Memory Card</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('ups') }}">UPS</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('stabilizer') }}">Stabilizer</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('modem') }}">Modem</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('printer') }}">Printer</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('flashdisk') }}">Flashdisk</a></li>
	                     <li role="presentation" class="divider"></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('aksesoris') }}">All Aksesoris</a></li>

	                    </ul>
	            </li>
	            <li class="dropdown">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Komponen   
	                    <span class="caret"></span></a>
	                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu2">
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('processor') }}">Processor</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('ram') }}">RAM</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('motherboard') }}">Motherboard</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('harddisk') }}">Harddisk</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('power_supply') }}">Power Supply</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('monitor') }}">Monitor</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('vga') }}">VGA</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('casing') }}">Casing</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('os') }}">OS</a></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('software') }}">Software</a></li>
	                     <li role="presentation" class="divider"></li>
	                     <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('komponen') }}">All Komponen</a></li>
	                    </ul>
	            </li>
	        </ul>
	        <ul class="navbar-form navbar-right">
	        <div class="form-group">
	            <input type="search" placeholder="search" class="form-control">
	            </div>
	            <button type="submit" class="btn btn-success">
	                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
	            </button>
	        </ul>
	        </div>
	    </div>
	  </nav>
	</div>
	<br><br><br>
	@yield('pages')
	</body>
</html>