@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/booking-form.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-body">
        <form action="{{url('/form-booking', $product->id)}}" method="POST">
            @csrf
            <fieldset disabled>
                <legend>Booking</legend>
                <!-- field untuk nama produk -->
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Tipe Produk</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="diisi sama nama paket dari tabel" value="{{$product->name_product}}">
                </div>

                <!-- field untuk harga produk -->
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Harga Produk</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="diisi sama harga sesuai dengan produk" value="{{$product->price}}">
                </div>
            </fieldset>
                <!-- field untuk pick tanggal booking -->
                <div class="mb-3">
                    <label for="TextInput" class="form-label">Tanggal Booking</label>
                    <div class="input-group date" id="datepicker">
                        <input type="text" class="form-control" name="tanggal_booking">
                        <span class="input-group-append">
                           
                        </span>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Konfirmasi</button>
            
        </form>
    </div>
    <script type="text/javascript">
        $(function(){
            $('#datepicker').datepicker();
        })
    </script>
</body>
</html>
@endsection