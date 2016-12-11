@if(count($errors)>0)
<div class="alert alert-danger">
	<strong>Ooops, Something went wrong!</strong>
	<br>
	<br>
	<!--ul untuk membuat bullet,ol untuk membuat numbering -->
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif