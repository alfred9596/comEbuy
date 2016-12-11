@extends('layout')

@section('pages')

<div class="row">
    <div class="col-md-2">
        <div class="container">
            @include('signin')
    </div>
        </div>
    <div class="col-md-8">
        <div class="container">

        </div>
    </div>
    <div class="col-md-2">
        <div class="container">
            @include('cart')
        </div>
    </div>
</div>

@endsection