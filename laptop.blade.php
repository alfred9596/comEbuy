@extends('layout')

@section('pages')
<?php
    $datass=DB::select('select * from notebook');
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
            <h1>Laptop</h1>
            <div style="overflow-x:auto;">
            <table class="table table-striped"> 
                <thead>
                    <th>Model</th>
                    <th>Processor</th>
                    <th>OS</th>
                    <th>Storage</th>
                    <th>RAM</th>
                    <th>Graphic</th>
                    <th>Connection</th>
                    <th>Camera</th>
                    <th>Display</th>
                    <th>Colour</th>
                    <th>Brand</th>
                    <th>Price</th>
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
                        <td class="table-text"><div>{{ $data->prosesor }}</div></td>
                        <td class="table-text"><div>{{ $data->os }}</div></td>
                        <td class="table-text"><div>{{ $data->storage }}</div></td>
                        <td class="table-text"><div>{{ $data->ram }}</div></td>
                        <td class="table-text"><div>{{ $data->graphic }}</div></td>
                        <td class="table-text"><div>{{ $data->koneksi }}</div></td>
                        <td class="table-text"><div>{{ $data->kamera }}</div></td>
                        <td class="table-text"><div>{{ $data->display }}</div></td>
                        <td class="table-text"><div>{{ $data->warna }}</div></td>
                        <td class="table-text"><div>{{ $data->brand }}</div></td>
                        <td class="table-text"><div>{{ $data->harga }}</div></td>
                        <td class="table-text"><div>{{ $data->inserter }}</div></td>
                        <td><a href="">Add to cart</a></a> 
                        @if (session()->has('members'))
                        <td><a href={{url('update_laptop')}}/{{$data->laptop_id}}>Edit</a></td>
                        @endif
                        @if (session()->has('members'))
                        <td><a href={{url('delete_laptop')}}/{{$data->laptop_id}}>Delete</a></td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            @if (session()->has('members'))
                <a href="insert_laptop">Insert</a>
            @endif
        </div>
    </div>
</div>

@endsection