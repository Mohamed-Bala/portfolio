
<head>
    <meta charset="utf-8">
    <title>Mohammed</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    @if (App::getLocale() == 'en')
    <link href="{{ URL::asset('css/ltr.css') }}" rel="stylesheet">
    @else
    <link href="{{ URL::asset('css/rtl.css') }}" rel="stylesheet">
    @endif
    <!-- Favicon -->
    <link href="{{asset('/assets/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <style>
        @import url("{{ asset('assets') }}/fonts/Janna LT Regular.eot");
        
        body{
          font-family: 'fonts/Janna LT Regular.', serif;
        }
        </style>


</head>