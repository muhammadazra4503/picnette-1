@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/about-us.css') }}" />
    <title>Document</title>
</head>
<body>
    <div class="container-header" id="section1">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{URL::asset('/image/banner-aboutus.png')}}" alt="First slide">
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-body">
        <div class="row">
            <div class="col">
                <h1><b>Our Application</b></h1>
                <h4>Picnette adalah aplikasi penyedia jasa booking <br>
                    studio foto secara online</h4>
            </div>
            <div class="col">
                <img src="{{URL::asset('/image/img1-aboutus.png')}}" alt="">
            </div>
        <div class="all-member">
            <h1><b>All Member</b></h1>
            <img src="{{URL::asset('/image/foto-member.png')}}" alt="">
        </div>
        </div>
    </div>
</body>
</html>
@include('layouts.footer')
@endsection