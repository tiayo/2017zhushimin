@inject('index', 'App\Services\Home\IndexService')
@inject('car', 'App\Services\Home\CarService')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')-{{config('site.title')}}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/style/home/css/reset.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/style/home/css/swiper-3.4.1.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/style/home/css/style.css') }}"/>
    <script src="{{ asset('/style/home/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/style/home/js/public-js.js') }}"></script>
    <script src="{{ asset('/style/home/js/swiper-3.4.1.jquery.min.js') }}"></script>
    <script src="{{ asset('/style/home/js/script.js') }}"></script>
    @section('style')
    @show
</head>
<body>

@section('body')
@show

<div class="copyright">{{ config('site.title') }} 版权所有</div>

@section('script')
@show
</body>
</html>