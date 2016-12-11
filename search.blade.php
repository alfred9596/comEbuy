@extends('layout')

@section('pages')
<?php
    $searches=session('search');
    $searches1='%'.$searches.'%';
    $searches2=$searches.'%';
    $searches3='%'.$searches;
    echo "<script>alert(e(searches) );</script>";

    $datass=DB::select('select * from notebook where nama like ? or nama like ? or nama like ? or nama like ? or prosesor like ? or prosesor like ? or prosesor like ? or prosesor like ? or os like ? or os like ? or os like ? or os like ? or storage like ?  or storage like ?  or storage like ?  or storage like ? or ram like ?  or ram like ?  or ram like ?  or ram like ? or graphic like ?  or graphic like ?  or graphic like ?  or graphic like ? or koneksi like ?  or koneksi like ?  or koneksi like ?  or koneksi like ? or kamera like ?  or kamera like ?  or kamera like ?  or kamera like ? or display like ?  or display like ?  or display like ?  or display like ? or warna like ?  or warna like ?  or warna like ?  or warna like ? or harga like ?  or harga like ?  or harga like ?  or harga like ? or brand like ?  or brand like ?  or brand like ?  or brand like ? or inserter like ?  or inserter like ?  or inserter like ?  or inserter = ?',[$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3]);
    $datass2=DB::select('select * from aksesoris where nama like ? or nama like ? or nama like ? or nama like ? or type like ? or type like ? or type like ? or type like ? or brand like ? or brand like ? or brand like ? or brand like ? or  harga like ? or  harga like ? or  harga like ? or  harga like ? or deskripsi like ? or deskripsi like ? or deskripsi like ? or deskripsi like ? or inserter like ? or inserter like ? or inserter like ? or inserter like ?',[$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3]);
    $datass3=DB::select('select * from komponen where nama like ? or nama like ? or nama like ? or nama like ? or type like ? or type like ? or type like ? or type like ? or brand like ? or brand like ? or brand like ? or brand like ? or  harga like ? or  harga like ? or  harga like ? or  harga like ? or deskripsi like ? or deskripsi like ? or deskripsi like ? or deskripsi like ? or inserter like ? or inserter like ? or inserter like ? or inserter like ?',[$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3,$searches,$searches1,$searches2,$searches3]);
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <br><br>
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
                    @foreach ($datass2 as $data)
                    <tr>
                        <!-- Task Name -->
                        <td class="table-text"><div>{{ $data->nama }}</div></td>
                        <td class="table-text"><div>{{ $data->type }}</div></td>
                        <td class="table-text"><div>{{ $data->brand }}</div></td>
                        <td class="table-text"><div>{{ $data->harga }}</div></td>
                        <td class="table-text"><div>{{ $data->deskripsi }}</div></td>
                        <td class="table-text"><div>{{ $data->inserter }}</div></td>
                        <td><a href="">Add to cart</a></a>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <br><br>
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
                    @foreach ($datass3 as $data)
                    <tr>
                        <!-- Task Name -->
                        <td class="table-text"><div>{{ $data->nama }}</div></td>
                        <td class="table-text"><div>{{ $data->deskripsi }}</div></td>
                        <td class="table-text"><div>{{ $data->harga }}</div></td>
                        <td class="table-text"><div>{{ $data->type }}</div></td>
                        <td class="table-text"><div>{{ $data->brand }}</div></td>
                        <td class="table-text"><div>{{ $data->inserter }}</div></td>
                        <td><a href="">Add to cart</a></a> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

@endsection