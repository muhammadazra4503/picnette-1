@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/contact-us.css') }}" />
    <title>Document</title>
</head>
<body>
    <div class="container-header" id="section1">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{URL::asset('/image/banner-contactus.png')}}" alt="First slide">
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-body">
    <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Get in Touch</h5>
                            <br>
                            <form action="{{url('/contact-us')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Nama</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Masukkan Nama" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Email</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2"
                                        placeholder="Masukkan Email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Pesan</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2"
                                        placeholder="Masukkan Pesan" name="pesan">
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body" style="background-color: #D2D0D4;">
                            <h5 class="card-title">Informasi Lengkap</h5>
                            <br>
                            <a class="btn btn-floating m-0" href="#!" role="button"><i class="fab fa-email"><img
                                        src="{{URL::asset('/image/email.png')}}" width="30" height="30" alt=""
                                        loading="lazy"></i>&nbsp;&nbsp;thebestispicnette@gmail.com</a>
                            <br>
                            <br>
                            <a class="btn btn-floating m-0" href="#!" role="button"><i class="fab fa-instagram"><img
                                        src="{{URL::asset('/image/instagram.png')}}" width="30" height="30" alt=""
                                        loading="lazy"></i>&nbsp;&nbsp;mychoiceisPicnette</a>
                            <br>
                            <br>
                            <a class="btn btn-floating m-0" href="#!" role="button"><i class="fab fa-facebook-f"><img
                                        src="{{URL::asset('/image/facebook.png')}}" width="30" height="30" alt=""
                                        loading="lazy"></i>&nbsp;&nbsp;mychoiceisPicnette</a>
                            <br>
                            <br>
                            <a class="btn btn-floating m-0" href="#!" role="button"><i class="fab fa-telepon"><img
                                        src="{{URL::asset('/image/phone.png')}}" width="30" height="30" alt=""
                                        loading="lazy"></i>&nbsp;&nbsp;0813 - 6425 - 9348</a>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
    </div>
</body>
</html>
@include('layouts.footer')
@endsection