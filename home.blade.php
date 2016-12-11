@extends('layout')

@section('pages')
<style>
    html, body {font-family: 'Lato'; }
    .fa-btn { margin-right: 6px;}
    .col-md-2{ background-color: #fff;}
    .navbar { background-color: #24F5B5  
</style>
<div class="row">
    <div class="col-md-2">
        <div class="container">
            @include('signin')
    </div>
        </div>
    <div class="col-md-10">
        <div class="container">

        </div>
    </div>
</div>

@endsection