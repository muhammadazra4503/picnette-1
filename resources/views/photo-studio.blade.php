@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/auth.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/photo-studio.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/landing.css') }}" />
    <title>Home</title>
</head>
<body>
    <div class="container-header" id="section1">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{URL::asset('/image/bgindex.png')}}" alt="First slide">
                </div>
            </div>
        </div>
    </div>

    <div class="container-body">
    <div class="card-head text-center">
                <h2>Our Products</h2>
                <hr>
            </div>
            <div class="row">
                @foreach ($product as $item)
                <div class="col-lg-3 mb-3">
                    <a href="{{ url('/product-detail', $item->id) }}">
                        <div class="card border-0">
                            <img src="{{URL::asset('product/'.$item->foto)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">{{$item->name_product}}</p>
                                <h5 class="card-title">Rp. {{$item->price}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
    </div>
</body>
</html>
@include('layouts.footer')
@endsection