@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/detail-produk.css') }}" />
    <title>picnette</title>
</head>
<body>
    <div class="container-header">
        <div class="row">
            <div class="col">
                <img src="{{URL::asset('product/'.$product->foto)}}" alt="">
            </div>

            <div class="col">
                <h1>Deskripsi Paket Foto</h1>
                <p>{{$product->desc_product}}</p>
                <p>Harga</p>
                <h3>Rp. {{$product->price}}</h3><hr>
                <p>Yang Termasuk Kedalam Paket</p>
                <p>> {{$product->banyak_shoot}} x Shoot <br>
                    > {{$product->banyak_file}} File Picnette Cloud <br>

                    > Setiap orang mendapatkan : <br>
                    {{$product->benefit}} <br>

                    > Berlaku mulai {{$product->banyak_shoot}} orang <br>
                    @if($product->foto_keluarga == 1)
                    > Paket berlaku untuk photo keluarga</p>
                    @else
                    > Paket tidak berlaku untuk photo keluarga</p>
                    @endif
                <a href="{{ url('/form-booking', $product->id) }}"><button type="submit" class="btn1 btn-primary">Book Now</button></a>
            </div>
        </div>

        <hr>
        <p>Ketentuan Produk Ini</p>
        <p>> Menggunakan satu kostum (dari   konsumen) <br>
            > Biaya penambahan orang Rp 100.000/orang <br>
            >Tidak tersedia opsi penambahan shoot</p>
    </div>
</body>
</html>
@include('layouts.footer')
@endsection