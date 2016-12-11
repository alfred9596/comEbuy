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
	<form class = "form-signup" action = "{{url('/ins_kom')}}" method = "post">
	 {{ csrf_field() }}
		<h2 class="form-signin-heading">Sign up</h2>
		<table>
			<div class="form-group">
			    <label>Name</label>
			    <input type="text" class="form-control" name="name"  placeholder="Name" required autofocus>
			  </div>
			<div class="form-group">
			    <label>Description</label>
			    <input type="text" class="form-control" name="desc"  placeholder="Description" required autofocus>
			  </div>
			<div class="form-group">
			    <label>Item Type</label>
			    <input type="text" class="form-control" name="type"  placeholder="Item Type" required autofocus>
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
				<a href= '{{url("/komponen")}}' class='button1'>Cancel</a>
			</td>
			</tr>
		</table>	
	</form>
</body>
</html>