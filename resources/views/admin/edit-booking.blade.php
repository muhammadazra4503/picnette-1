
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/booking-form.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/dashboard-admin.css') }}">
    <script src="{{ URL::asset('js/dashboard-admin.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <title>Document</title>
</head>
<body id="body-pd">
<header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="{{URL::asset('/image/photo-produk-photoprint.png')}}" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> <a href="#" class="nav_logo"> <i class='bx bx-camera nav_logo-icon'></i> <span class="nav_logo-name">PICNETTE</span> </a>
                    <div class="nav_list"> 
                    <a href="{{ route('admin') }}" class="nav_link"> 
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="{{route('detailUser')}}" class="nav_link "> 
                        <i class='bx bx-user nav_icon'></i> 
                        <span class="nav_name">Users</span> 
                    </a>
                    <a href="{{route('detailProduct')}}" class="nav_link active"> 
                        <i class='bx bx-box nav_icon'></i> 
                        <span class="nav_name">Product</span> 
                    </a>
                    <a href="{{route('detailBooking')}}" class="nav_link"> 
                        <i class='bx bx-calendar   nav_icon'></i> 
                        <span class="nav_name">Booking List</span> 
                    </a>
                    </div>
                </div> 
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> 
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </a>        
        </nav>
    </div>    
    <div class="container-body">
        <form action="{{ route('editBookingStore', $data['id']) }}" method="POST">
        @csrf    
        <fieldset disabled>
                <legend>Edit booking</legend>
                <!-- field untuk nama produk -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="{{$user[0]->where('id', $data->user_id)->first()->name}}">
                </div>

                <!-- field untuk harga produk -->
                <div class="mb-3">
                    <label for="harga" class="form-label">Paket Foto</label>
                    <input type="text" name="paketfoto" class="form-control" placeholder="{{$produk[0]->where('id', $data->product_id)->first()->name_product}}">
                </div>
        </fieldset>
                <!-- field untuk -->
                <div class="mb-3">
                    <label for="TextInput" class="form-label">Tanggal Booking</label>
                    <div class="input-group date" id="datepicker">
                        <input type="text" class="form-control" name="tanggalbooking" value="{{ $data['tanggal_booking'] }}">
                        <span class="input-group-append">
                           
                        </span>
                    </div>
                </div>

                <!-- field untuk -->
                <div class="mb-3">
                    <label for="banyakshoot" class="form-label">Status</label><br>
                    <select name="status" id="" value="{{ $data['status'] }}">
                        <option value="Booking Berhasil">Booking Berhasil</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            
        </form>
    </div>
    <script type="text/javascript">
        $(function(){
            $('#datepicker').datepicker();
        })
    </script>
</body>
</html>