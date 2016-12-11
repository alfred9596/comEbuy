<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
	<form class = "form-signup" action = "{{url('/reg_submit')}}" method = "post">
	 {{ csrf_field() }}
		<h2 class="form-signin-heading">Sign up</h2>
		<table>
			<div class="form-group">
			    <label>Username</label>
			    <input type="text" class="form-control" name="username"  placeholder="Enter fullname" required autofocus>
			  </div>
			<div class="form-group">
			    <label>Password</label>
			    <input type="password" class="form-control" name="password"  placeholder="Enter password" required autofocus>
			  </div>
			<div class="form-group">
			    <label>Retype Password</label>
			    <input type="password" class="form-control" name="password2"  placeholder="Enter retype password" required autofocus>
			  </div>

			<div class="form-group">
			    <label>PIN</label>
			    <input type="password" class="form-control" name="pin"  placeholder="Enter pin" required autofocus>
			  </div>
			<div class="form-group">
			    <label>Retype PIN</label>
			    <input type="password" class="form-control" name="pin2"  placeholder="Enter retype pin" required autofocus>
			  </div>
			<tr>
			<td colspan="1">
				<button class="btn btn-sm btn-primary btn-block" type="submit" name="submit" value="Register">Sign up</button>
			</td>
				<td>&nbsp;</td>
			<td>
				<a href= '{{url("/")}}' class='button1'>Cancel</a>
			</td>
			</tr>
		</table>	
	</form>
</body>
</html>