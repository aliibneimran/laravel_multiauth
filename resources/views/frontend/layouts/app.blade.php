<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="msapplication-TileColor" content="#0E0E0E">
  <meta name="template-color" content="#0E0E0E">
  <link rel="manifest" href="manifest.json" crossorigin>
  <meta name="msapplication-config" content="browserconfig.xml">
  <meta name="description" content="Index page">
  <meta name="keywords" content="index, page">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/template/favicon.svg')}}">
  <link href="{{asset('assets/css/style.css?version=4.1')}}" rel="stylesheet">
  <title>@yield('title')</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
  <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
        <div class="text-center"><img src="{{asset('assets/imgs/template/loading.gif')}}" alt="jobBox"></div>
      </div>
    </div>
  </div>
  
  @include('frontend.layouts.header')

  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div> 
  @endif
  
  @yield('content')
  @include('frontend.layouts.footer')

  <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
  @yield('scripts')
  @yield('script')
  <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
  <script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
  <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/waypoints.js')}}"></script>
  <script src="{{asset('assets/js/plugins/wow.js')}}"></script>
  <script src="{{asset('assets/js/plugins/magnific-popup.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/select2.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/isotope.js')}}"></script>
  <script src="{{asset('assets/js/plugins/scrollup.js')}}"></script>
  <script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/counterup.js')}}"></script>
  <script src="{{asset('assets/js/main.js?v=4.1')}}"></script>
  
</body>

</html>