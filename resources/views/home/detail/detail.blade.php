@extends('home.layouts.app')

@section('title', $commodity['name'])

@section('style')
    <style type="text/css">
        .content {
            width: 1000px;
            padding: 50px 0;
            margin: 50px auto;
            box-shadow: 1px 1px 5px #000;
        }
        .c-top {
            position: relative;
            width: 100%;
            height: 400px;
        }
        .ct-l {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 190px;
            margin: auto 0;
            width: 360px;
            height: 380px;
            box-shadow: 1px 1px 5px #000;
        }
        .ctl-t {
            position: absolute;
            top: 5px;
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 350px;
            height: 300px;
        }
        .ctl-t img {
            float: left;
            width: 100%;
            height: 100%;
        }
        .ctl-b {
            overflow: hidden;
            position: absolute;
            bottom: 5px;
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 350px;
            height: 65px;
        }
        .ctl-b img {
            float: left;
            width: 58px;
            height: 58px;
            margin-top: 2px;
            margin-left: 8px;
            border: 1px solid #999;
            cursor: pointer;
        }
        .ctl-b .active {
            border: 1px solid #000;
        }
        .ct-r {
            position: absolute;
            top: 0;
            bottom: 0;
            right: 190px;
            margin: auto 0;
            padding: 15px;
            width: 220px;
            height: 350px;
            box-shadow: 1px 1px 5px #000;
        }
        .ct-r .ctr-title {
            margin-bottom: 20px;
        }
        .ct-r .ctr-title h1 {
            white-space:nowrap;
            overflow:hidden;
            text-overflow:ellipsis;
            font-size: 16px;
            color: #888;
            line-height: 18px;
            margin-bottom: 7px;
        }
        .ct-r .ctr-title .ctr-price {
            font-weight: bold;
            font-size: 20px;
            color: #000;
            line-height: 20px;
            font-weight: normal;
        }
        .ct-r .ctr-ys h1,
        .ct-r .ctr-cm h1,
        .ct-r .ctr-sl h1 {
            height: 40px;
            line-height: 40px;
            font-size: 16px;
            font-weight: bold;
        }
        .ct-r .ctr-ys select,
        .ct-r .ctr-cm select,
        .ct-r .ctr-sl select {
            float: left;
            width: 100%;
            height: 25px;
            margin: 0 5px 5px 0;
            outline: none;
            border: 0;
            box-shadow: 1px 1px 5px #000;
            text-align: center;
            line-height: 25px;
        }
        .ct-r .join-cart {
            display: inline-block;
            width: 100%;
            height: 40px;
            margin-top: 10px;
            outline: none;
            border: 1px solid #000;
            text-align: center;
            line-height: 40px;
            cursor: pointer;
        }
        .c-bottom {
            margin-top: 50px;
            padding: 0 50px;
        }
    </style>
@endsection

@section('body')
       @include('home.layouts.header')
       <form class="goods-details" method="post" action="{{ route('home.car_add', ['commodity_id' => $commodity['id']]) }}">
           {{csrf_field() }}
           <div class="content">
               <div class="c-top">
                   <div class="ct-l">
                       <div class="ctl-t">
                           <img src="{{ $commodity['image_0'] }}"/>
                       </div>
                       <div class="ctl-b">
                           @for($i=0; $i<9; $i++)
                               @if(!empty($commodity['image_'.$i]))
                                   <img src="{{ $commodity['image_'.$i] }}" @if ($i == 0) class="active" @endif/>
                               @endif
                           @endfor
                       </div>
                   </div>
                   <div class="ct-r">
                       <div class="ctr-title">
                           <h1>{{ $commodity['name'] }}</h1>
                           <span class="ctr-price">￥{{ $commodity['price'] }}</span>
                       </div>

                       @foreach($attributes as $attribute)
                           <div class="ctr-ys clearfix">
                               <h1>{{ $attribute['name'] }}</h1>
                               <select name="attribute[{{ $attribute['name'] }}]">
                                   @foreach(explode(',', $attribute['value']) as $value)
                                    <option value ="{{ $value }}">{{ $value }}</option>
                                   @endforeach
                               </select>
                           </div>
                       @endforeach

                       <div class="ctr-sl clearfix">
                           <h1>数量选择</h1>
                           <select name="num">
                               @for ($i=1; $i<=20; $i++)
                                   <option value ="{{ $i }}">{{ $i }}</option>
                               @endfor
                           </select>
                       </div>

                       <button type="submit" class="join-cart">加入购物车</button>
                   </div>
               </div>
               <div class="c-bottom">
                   {!! $commodity['description'] !!}
               </div>
           </div>
       </form>
    <script type="text/javascript">
        $(".ctl-b img").click(function() {
            $(".ctl-b img").removeClass('active');
            $(this).addClass('active');
            var imgSrc = $(".ctl-b img").eq($(".ctl-b img").index(this)).attr('src');
            console.log(imgSrc);
            $(".ctl-t img").attr('src', imgSrc);
        });
    </script>
@endsection