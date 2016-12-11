@extends('layout')
@section('pages')
<form class = "form-signup" action = "{{url('/log_in')}}" method = "post">
    {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name = "username" placeholder="Username" class="form">
        </div>
        <div class="form-group">
            <input type="password" name="pass" placeholder="Password" class="form">
        </div>
        <table>
            <tr>
                <td><button type="submit" class="btn btn-warning">Login</button></td>
            </tr>
       </table>
</form>
