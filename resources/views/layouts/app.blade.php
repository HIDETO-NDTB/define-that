<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/textCount.js') }}"></script>

</head>
<body>
    
        
    @include('inc/navbar')

        
            @yield('content')
        
    

    @include('inc/footer')

<!-- JavaScript Libraries -->
<script src="{{ asset('app/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('app/lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('app/lib/php-mail-form/validate.js') }}"></script>
<script src="{{ asset('app/lib/chart/chart.js') }}"></script>

<!-- Template Main Javascript File -->
<script src="{{ asset('app/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success')}}")
    @endif
    @if (Session::has('warning'))
        toastr.warning("{{ Session::get('warning')}}")
    @endif
  </script>

</body>
</html>
