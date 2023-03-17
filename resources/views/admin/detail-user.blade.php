@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ URL::asset('css/dashboard-admin.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js"></script>
<script src="{{ URL::asset('js/dashboard-admin.js') }}"></script>
  <title>Document</title>
</head>
<body id="body-pd">
<header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="{{URL::asset('/image/photo-produk-photoprint.png')}}" alt=""> </div>
    </header>
        @section('content')
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-camera nav_logo-icon'></i> <span class="nav_logo-name">PICNETTE</span> </a>
                <div class="nav_list"> 
                  <a href="{{ route('admin') }}" class="nav_link"> 
                    <i class='bx bx-grid-alt nav_icon'></i>
                    <span class="nav_name">Dashboard</span>
                  </a>
                  <a href="{{route('detailUser')}}" class="nav_link active"> 
                    <i class='bx bx-user nav_icon'></i> 
                    <span class="nav_name">Users</span> 
                  </a>
                  <a href="{{route('detailProduct')}}" class="nav_link"> 
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
                                    </form></a>        </nav>
    </div>

    <div class="height-100 bg-light">
      <h4>Main Components</h4>
      </br> 
      <div class="container">
          <div class="card">
              <div class="card-header">Manage Users</div>
              <div class="card-body">
                  {{ $dataTable->table() }}
              </div>
          </div>
      </div>
    </div>
    @endsection

    <!--Container Main end-->
    <script>
      $(document).ready( function () {
        $('#myTable').DataTable();
      } );
    </script>

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
</body>
</html>


    