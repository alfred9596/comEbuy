<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<style>
        body {background-color: #E3FEF5}
	</style>
</head>
<body>
	<div class="container">
	@include('errors')
	<form class = "form-signup" action = "{{url('/ins_laptop')}}" method = "post">
	 {{ csrf_field() }}
		<h2 class="form-signin-heading">Sign up</h2>
		<table>
			<div class="form-group">
			    <label>Model</label>
			    <input type="text" class="form-control" name="model"  placeholder="Model" required autofocus>
			  </div>
			<div class="form-group">
			    <label>Processor</label>
			    <input type="text" class="form-control" name="prosesor"  placeholder="processor" required autofocus>
			  </div>
			<div class="form-group">
			    <label>Operating System</label>
			    <input type="text" class="form-control" name="os"  placeholder="Operating System" required autofocus>
			  </div>
			<div class="form-group">
			    <label>Storage</label>
			    <input type="text" class="form-control" name="storage"  placeholder="Storage" required autofocus>
			  </div>
			<div class="form-group">
			    <label>RAM</label>
			    <input type="text" class="form-control" name="ram"  placeholder="RAM" required autofocus>
			  </div>
			<div class="form-group">
			    <label>Graphic</label>
			    <input type="text" class="form-control" name="graphic"  placeholder="Graphic" required autofocus>
			  </div>
			<div class="form-group">
			    <label>Connection</label>
			    <input type="text" class="form-control" name="koneksi"  placeholder="Connection" required autofocus>
			  </div>
			<div class="form-group">
			    <label>Camera</label>
			    <input type="text" class="form-control" name="kamera"  placeholder="Camera" required autofocus>
			  </div>
			<div class="form-group">
			    <label>Display</label>
			    <input type="text" class="form-control" name="display"  placeholder="Display" required autofocus>
			  </div>
			<div class="form-group">
			    <label>Colour</label>
			    <input type="text" class="form-control" name="warna"  placeholder="Colour" required autofocus>
			  </div>
			<div class="form-group">
			    <label>Brand</label>
			    <input type="text" class="form-control" name="brand"  placeholder="Brand" required autofocus>
			  </div>
			<div class="form-group">
			    <label>Price</label>
			    <input type="text" class="form-control" name="price"  placeholder="Price" required autofocus>
			  </div>
			<tr>
			<td colspan="1">
				<button class="btn btn-sm btn-primary btn-block" type="submit" name="submit" value="Register">Submit</button>
			</td>
				<td>&nbsp;</td>
			<td>
				<a href= '{{url("/laptop")}}' class='button1'>Cancel</a>
			</td>
			</tr>
		</table>	
	</form>
</body>
</html>