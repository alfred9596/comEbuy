@if(count($errors)>0)
<div class="alert alert-danger">
    <!--ul untuk membuat bullet,ol untuk membuat numbering -->
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
@if (session()->has('members'))
    <h3>Welcome</h3>
    <h3>{{session('members')}}</h3>
    <a href="{{ url('logout') }}">Log Out</a>
@else
<form class = "form-signup" action = "{{url('/login')}}" method = "post">
    {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name = "username" placeholder="Username" class="form">
        </div>
        <div class="form-group">
            <input type="password" name="pass" placeholder="Password" class="form">
        </div>
        <table>
            <tr>
            <td><button type="submit" class="btn btn-warning">Sign in</button></td>
            <td>&nbsp;</td>
            <td><a href="{{ url('register') }}">Sign up</a></td>
            </tr>
       </table>
</form>
@endif