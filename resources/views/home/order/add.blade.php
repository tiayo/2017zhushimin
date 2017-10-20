@extends('home.layouts.app')

@section('title', '订单确认')
@section('class', 'order-clearing')
@section('id', 'app')

@section('style')
    <script src="{{ asset('/style/home/js/vue.js') }}"></script>
    <style type="text/css">
        .content {
            width: 1000px;
            padding: 50px 0;
            margin: 50px auto;
        }
        .order {
            float: left;
            width: 600px;
        }
        .order .or-title {
            height: 50px;
            padding-left: 20px;
            border: 1px solid #000;
            font-weight: bold;
            font-size: 18px;
            line-height: 50px;
        }
        .order .or-list {
            border: 1px dashed #000;
            border-top: 0;
        }
        .order .or-list img {
            float: left;
            width: 130px;
            height: 130px;
            margin: 10px 0 0 10px;
        }
        .order .or-list h3 {
            float: left;
            width: 435px;
            height: 35px;
            margin: 10px 0 0 10px;
            font-weight: bold;
            font-size: 18px;
            line-height: 35px;
        }
        .order .or-list h1,
        .order .or-list h2 {
            white-space:nowrap;
            overflow:hidden;
            text-overflow:ellipsis;
            float: left;
            width: 210px;
            height: 20px;
            margin-left: 10px;
        }
        .order .or-list h2 input {
            display: inline-block;
            width: 100px;
            height: 20px;
            outline: none;
            border: 0;
            line-height: 20px;
        }
        .delivery-info {
            float: right;
            width: 350px;
            border: 1px solid #000;
        }
        .delivery-info h1 {
            height: 50px;
            padding-left: 20px;
            font-weight: bold;
            font-size: 18px;
            line-height: 50px;
        }
        .delivery-info div {
            height: 35px;
            padding: 0 20px;
            line-height: 35px;
        }
        .delivery-info div:nth-last-child(2) {
            color: #f00;
            font-weight: bold;
            font-size: 18px;
        }
        .delivery-info div input {
            display: inline-block;
            width: 230px;
        }
        .delivery-info div .delivery-name {
            display: inline-block;
            margin-left: 14px;
        }
        .confirm {
            display: inline-block;
            width: 90%;
            height: 45px;
            margin: 10px 5%;
            outline: none;
            border: 0;
            background-color: #000;
            color: #fff;
            text-align: center;
            line-height: 45px;
            cursor: pointer;
        }
    </style>
@endsection

@section('body')
    @include('home.layouts.header')
    <form class="order-clearing" action="{{ route('home.order_add') }}" method="post">
        {{ csrf_field() }}
        <div class="content clearfix" id="content">
            <div class="order">
                <div class="or-title">订单详情</div>
                @foreach($cars as $car)
                    <div class="or-list clearfix">
                        <img src="{{ $car->commodity->image_0 }}"/>
                        <h3>{{ $car->commodity->name }}</h3>
                        <h1>送货方式：<em>普通快递</em></h1>
                        <h2>收货人：<em>@{{name}}</em></h2>
                        <h1>货运单号：<em>{{ $car->commodity->id }}</em></h1>
                        <h2>手机号码：<em>@{{tel}}</em></h2>
                        <h1>付款方式：<em>微信支付</em></h1>
                        <h2>收货地址：<em>@{{address}}</em></h2>
                        <h2>付款时间：<em>未付款</em></h2>
                        <h2>商品总额：￥<input type="number" value="{{ $car['price'] * $car['num'] }}"></h2>
                    </div>
                @endforeach
            </div>
            <div class="delivery-info">
                <h1>收货人信息</h1>
                <div>
                    <label for="">收件人：</label>
                    <input type="text" name="name" class="delivery-name" v-model="name"/>
                </div>
                <div>
                    <label for="">电话号码：</label>
                    <input type="text" name="phone" class="delivery-tel" v-model="tel"/>
                </div>
                <div>
                    <label for="">收件地址：</label>
                    <input type="text" name="address" class="delivery-address" v-model="address"/>
                </div>
                <div>
                    商品总金额：￥<em>{{ $total_price }}</em>
                </div>
                <button class="confirm">提交订单</button>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        var app = new Vue({
            el: '#content',
            data: {
                name: '{{ Auth::user()['name'] }}',
                tel: '{{ Auth::user()['phone'] }}',
                address: '{{ Auth::user()['address'] }}',
            }
        });
    </script>
@endsection