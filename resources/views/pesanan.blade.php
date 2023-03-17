@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/pesanan.css') }}" />
    <title>Document</title>
</head>
<body>
    @foreach ($booking as $item) 
    <div class="container-body">
        <div class="row">
           
            <div class="col">
                <img src="{{URL::asset('product/'.$product[0]->where('id', $item->product_id)->first()->foto)}}" alt="">
            </div>
            <div class="col-6">
                <h1>{{$product[0]->where('id', $item->product_id)->first()->name_product}}</h1>
                <p>1 Produk x Rp. {{$product[0]->where('id', $item->product_id)->first()->price}}</p>
                <p>Tanggal Booking: {{$item->tanggal_booking}}</p>
                <p>Kode Booking: {{$item->kode_booking}}</p>
            </div>
            <div class="col">
                <p>Total Harga</p>
                <h4>Rp. {{$item->total}}</h4>
                <hr>
                <p>Status: <br><b>{{$item->status}}</b></p>
            </div>

            <div class="col-9">
                
            </div>
            <div class="col-2">
                <!-- <a href=""><button type="submit" class="btn1 btn-primary">Lihat Detail Transaksi</button></a> -->
            </div>
           
        </div>
       
    </div>
</br>
    @endforeach  
</body>
</html>
@endsection