@extends('layout')

@section('pages')
<?php
    $datass=DB::select('select * from komponen');
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
            <h1>Komponen Laptop</h1>
            <div style="overflow-x:auto;">
            <table class="table table-striped"> 
                <thead>
                    <th>Nama</th>
                    <th>Item Type</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>inserter</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                    @foreach ($datass as $data)
                    <tr>
                        <!-- Task Name -->
                        <td class="table-text"><div>{{ $data->nama }}</div></td>
                        <td class="table-text"><div>{{ $data->type }}</div></td>
                        <td class="table-text"><div>{{ $data->brand }}</div></td>
                        <td class="table-text"><div>{{ $data->harga }}</div></td>
                        <td class="table-text"><div>{{ $data->deskripsi }}</div></td>
                        <td class="table-text"><div>{{ $data->inserter }}</div></td>
                        <td><a href="">Add to cart</a></a> 
                        @if (session()->has('members'))
                        <td><a href={{url('update_komponen')}}/{{$data->kom_id}}>Edit</a></td>
                        @endif
                        @if (session()->has('admin'))
                        <td><a href={{url('delete_komponen')}}/{{$data->kom_id}}>Deletes</a></td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            @if (session()->has('members'))
                <a href="insert_komponen">Insert</a>
            @endif
        </div>
    </div>
</div>

@endsection
