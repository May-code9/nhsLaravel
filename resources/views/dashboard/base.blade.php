<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Mosaddek">
  <meta name="keyword" content="AFRH Dashboard">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>{{ config('app.shortName') }} | @yield('title')</title>
  @if(Route::currentRouteName() == 'admin.dashboard')
  @include('dashboard.head.dashboard')
  @else
  @include('dashboard.head.data.buy')
  @endif
  <link rel="stylesheet" type="text/css" href="{{asset('css/may.css')}}" />
  <link rel="shortcut icon" type="image/png" href="{{ asset('img/icon.png') }}" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script>
  window.Laravel = {!! json_encode([
    'csrfToken' => csrf_token(),
  ]) !!};
  </script>

</head>

<body>
  <section id="container">
    @include('dashboard.header.header')
    @include('dashboard.header.aside')

    @yield('content')

    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        2019 &copy; {{config('app.designer')}}
        <a href="#" class="go-top">
          <i class="fa fa-angle-up"></i>
        </a>
      </div>
    </footer>
    <!--footer end-->
  </section>

  @if(Route::currentRouteName() == 'admin.dashboard')
  @include('dashboard.footer.dashboard')
  @else
  @include('dashboard.footer.data.buy')
  @endif
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</body>
</html>
