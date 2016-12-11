@extends('layout')

@section('pages')
<?php
    $datass=DB::select('select * from aksesoris where type = ?',[e($name)]);
?>
<div class="row">
    <div class="col-lg-2">
        <div class="container">
            @include('signin')
            <br>
            @include('cart')
    </div>
        </div>
    <div class="col-lg-10">
        <div class="container">
            <h1>Aksesoris</h1>
            <div style="overflow-x:auto;">
            <table class="table table-striped"> 
                <thead>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Item Type</th>
                    <th>Brand</th>
                    <th>Inserter</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                    @foreach ($datass as $data)
                    <tr>
                        <!-- Task Name -->
                        <td class="table-text"><div>{{ $data->nama }}</div></td>
                        <td class="table-text"><div>{{ $data->deskripsi }}</div></td>
                        <td class="table-text"><div>{{ $data->harga }}</div></td>
                        <td class="table-text"><div>{{ $data->type }}</div></td>
                        <td class="table-text"><div>{{ $data->brand }}</div></td>
                        <td class="table-text"><div>{{ $data->inserter }}</div></td>
                        <td><a href="">Add to cart</a></a> 
                        @if (session()->has('members'))
                        <td><a href={{url('update_aksesoris')}}/{{$data->acc_id}}>Edit</a></td>
                        @endif
                        @if (session()->has('admin'))
                        <td><a href={{url('delete_aksesoris')}}/{{$data->acc_id}}>Delete</a></td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            @if (session()->has('members'))
                <a href="insert_aksesoris">Insert</a>
            @endif
        </div>
    </div>
</div>

@endsection