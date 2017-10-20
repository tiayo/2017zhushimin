<div class="header">
    <div class="header-con">
        @if (Auth::check())
            <a href="#" class="login-button">你好：{{ Auth::user()['name'] }}</a>
            <a href="{{ route('home.person') }}" class="pc-button" style="margin-right: 1em">个人中心</a>
        @else
            <a href="{{ route('home.login') }}" class="login-button">登录/注册</a>
        @endif
        <a href="{{route('home.car') }}" class="shopping-cart-button">购物车</a>

    </div>
</div>
<div class="search">
    <a href="/" class="logo">{{ config('site.title') }}</a>
    <div class="search-con">
        <form  method="get" action="{{ route('home.search') }}">
            <input type="text" class="search-input" name="keyword" placeholder="输入关键词"/>
            <button class="search-button">搜索</button>
        </form>
    </div>
</div>
<div class="index-bigpic swiper-container clearfix">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="#"><img src="/style/home/images/bigpic1.jpg"/></a>
        </div>
        <div class="swiper-slide">
            <a href="#"><img src="/style/home/images/bigpic2.jpg"/></a>
        </div>
        <div class="swiper-slide">
            <a href="#"><img src="/style/home/images/bigpic3.jpg"/></a>
        </div>
        <div class="swiper-slide">
            <a href="#"><img src="/style/home/images/bigpic4.jpg"/></a>
        </div>
    </div>
</div>