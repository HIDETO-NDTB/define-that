<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google広告 -->
    <script data-ad-client="ca-pub-5633967393868762" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta property="og:site_name" content="◯◯の定義" />
    <meta property="og:title" content="◯◯の定義" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://define-that.com/" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="究極の暇つぶし。色々なものを定義しまくり殿堂入りを目指せ！"/>
    <meta property="fb:app_id" content="260131628327362" />
    <meta property="og:locale" content="ja_JP" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>◯◯の定義</title>
    <meta name="keywords"　content="define,定義,殿堂入り,暇つぶし,究極,おもしろい,個性,センス,Webサービス" />
    <meta name="description" content="究極の暇つぶし。色々なものを定義しまくり殿堂入りを目指せ！" />

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ secure_asset('/define_favicon.png') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Main Stylesheet File -->
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ secure_asset('js/textCount.js') }}"></script>

</head>
<body>
    
        
    @include('inc/navbar')

        
            @yield('content')
        
    

    @include('inc/footer')

<!-- JavaScript Libraries -->
<script src="{{ secure_asset('app/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ secure_asset('app/lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ secure_asset('app/lib/php-mail-form/validate.js') }}"></script>
<script src="{{ secure_asset('app/lib/chart/chart.js') }}"></script>

<!-- Template Main Javascript File -->
<script src="{{ secure_asset('app/js/main.js') }}"></script>
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
