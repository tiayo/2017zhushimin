@extends('home.layouts.app')

@section('title', Auth::user()['name'].'的购物车')

@section('style')
    <style type="text/css">
        .content {
            width: 1000px;
            margin: 50px auto;
            padding: 10px 50px;
            box-shadow: 1px 1px 5px #000;
        }
        .ct-title {
            width: 100%;
            height: 80px;
            margin-bottom: 20px;
            box-shadow: 1px 1px 5px #000;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            line-height: 80px;
        }
        .product {
            position: relative;
            float: left;
            width: 480px;
            height: 150px;
            margin: 10px 10px;
            box-shadow: 1px 1px 5px #000;
        }
        .product img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 5px;
            margin: auto 0;
            width: 135px;
            height: 135px;
        }
        .product .pro-name {
            white-space:nowrap;
            overflow:hidden;
            text-overflow:ellipsis;
            position: absolute;
            top: 8px;
            left: 150px;
            width: 320px;
            height: 35px;
            font-weight: bold;
            font-size: 16px;
            line-height: 35px;
        }
        .product .pro-guige {
            position: absolute;
            top: 45px;
            left: 150px;
            width: 320px;
            height: 70px;
            color: #999;
        }
        .product .pro-guige .gg {
            float: left;
            padding: 0 10px;
        }
        .product .pro-zz {
            white-space:nowrap;
            overflow:hidden;
            text-overflow:ellipsis;
            position: absolute;
            top: 115px;
            left: 150px;
            width: 200px;
            height: 25px;
            color: #f00;
            line-height: 25px;
        }
        .product .pro-del {
            position: absolute;
            top: 115px;
            right: 40px;
            width: 40px;
            height: 25px;
            color: #999;
            text-align: center;
            line-height: 25px;
            cursor: pointer;
        }
        .all-price {
            height: 50px;
            box-shadow: 1px 1px 5px #000;
            font-size: 18px;
            line-height: 50px;
        }
        .all-price span {
            float: left;
            height: 100%;
            padding: 0 15px;
            color: #f00;
            font-weight: bold;
        }
        .all-price .jixugouwu {
            float: right;
            width: 150px;
            height: 100%;
            color: #000;
            text-align: center;
            box-shadow: 2px 2px #000 inset,
            -2px -2px #000 inset;
        }
        .all-price .tijiao {
            float: right;
            width: 150px;
            height: 100%;
            background-color: #000;
            color: #fff;
            outline: none;
            border: 0;
            text-align: center;
            cursor: pointer;
        }
    </style>
@endsection

@section('body')
    @include('home.layouts.header')
    <form class="shopping-cart">
        <div class="content clearfix">
            <div class="ct-title">
                我的购物车
            </div>
            <ul class="product-list clearfix">
                @foreach($lists as $list)
                    @php
                        $attributes = explode('|', $list['remark']);
                    @endphp
                    <li class="product">
                        <img src="{{ $list->commodity->image_0 ?? null }}"/>
                        <div class="pro-name">{{ $list->commodity->name ?? '未找到' }}</div>
                        <div class="pro-guige">
                            @foreach($attributes as $attribute)
                                @php
                                    $attribute = explode(':', $attribute)
                                @endphp
                                <div class="gg">{{ $attribute[0] }}：<em>{{ $attribute[1] }}</em></div>
                            @endforeach
                                <div class="gg">数量：<em>{{ $list['num'] }}</em></div>
                        </div>
                        <div class="pro-zz">合计：￥<em>{{ $list['price'] * $list['num'] }}</em></div>
                        <div class="pro-del" onclick="location='{{ route('home.car_destory', ['commodity_id' => $list['commodity_id']]) }}'">删除</div>
                    </li>
                @endforeach
            </ul>
            <div class="all-price">
                <span>总价：￥<em>{{ $total_price }}</em></span>
                <a href="/" class="jixugouwu">继续购物</a>
                <button class="tijiao" onclick="location='{{ route('home.order_add') }}'">提交订单</button>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        $(".pro-del").click(function() {
            $(this).parent().remove();
        });
    </script>
@endsection