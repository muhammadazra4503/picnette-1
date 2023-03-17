@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/landing.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/auth.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}" />
    <title>Home</title>
</head>
    <body>
        <div class="container-header" id="section1">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{URL::asset('/image/slide 1.png')}}" alt="First slide">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-body" id="section2">
            <h1>Our Main Products</h1>
            <div class="row">
                <div class="col">
                    <a href="{{ url('/photo-studio') }}"><img src="{{URL::asset('/image/photostudio.png')}}" alt=""></a>
                </div>
                <div class="col">
                    <a href="{{ url('/photo-print') }}"><img src="{{URL::asset('/image/photoprint.png')}}" alt=""></a>
                </div>
            </div>

            <div class="our-studio">
                <h1>Our Studio</h1>
                <img src="{{URL::asset('/image/our-studio.png')}}" alt="">
            </div>

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{URL::asset('/image/about.png')}}" alt="First slide">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-contact" id="section3">
            <h4>Informasi Lengkap</h4>
            <div class="row">
                <section class="mb-4">
                    <!-- Facebook -->
                    <a href="#!" role="button"><i
                            class="fab fa-facebook-f"><img src="{{URL::asset('/image/facebook.png')}}" width="40" height="40" alt="" loading="lazy"></i>thebestispicnette@gmail.com</a>
                            
                    <!-- Instagram -->
                    <a href="#!" role="button"><i
                            class="fab fa-instagram"><img src="{{URL::asset('/image/instagram.png')}}" width="40" height="40" alt="" loading="lazy"></i>mychoiceisPicnette</a>
                            
                    <!-- email -->
                    <a href="#!" role="button"><i
                            class="fab fa-email"><img src="{{URL::asset('/image/email.png')}}" width="40" height="40" alt="" loading="lazy"></i>mychoiceisPicnette</a>

                    <!-- Phone -->
                    <a href="#!" role="button"><i
                            class="fab fa-phone"><img src="{{URL::asset('/image/phone.png')}}" width="40" height="40" alt="" loading="lazy"></i>0813 - 6425 - 9348</a>
                </section>
            </div>
            <a href="/photo-studio"><button type="submit" class="btn1 btn-primary">Book Now</button></a>
        </div>
    </body>
</html>
@include('layouts.footer')
@endsection