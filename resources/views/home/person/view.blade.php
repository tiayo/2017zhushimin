@extends('home.layouts.app')

@section('title', '个人中心')

@section('style')
    <style type="text/css">
        .content {
            width: 1000px;
            margin: 50px auto;
            padding: 10px 50px;
        }
        .content h1 {
            height: 35px;
            padding-bottom: 10px;
            border-bottom: 1px solid #999;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            line-height: 35px;
        }
        .or-choose {
            float: left;
            width: 85px;
            margin-top: 20px;
            margin-left: 80px;
            border: 1px dashed #999;
        }
        .or-choose li {
            float: left;
            width: 90%;
            height: 35px;
            margin: 0 5%;
            border-bottom: 1px dashed #999;
            text-align: center;
            line-height: 35px;
            cursor: pointer;
        }
        .or-choose .on {
            color: #f00;
            font-weight: bold;
        }
        .or-details {
            display: none;
            float: right;
            width: 735px;
            margin-top: 20px;
            margin-right: 80px;
            border: 1px dashed #999;
        }
        .or-details .or-list {
            margin-bottom: 20px;
        }
        .or-details .or-list:nth-last-child(2) {
            margin-bottom: 0;
        }
        .or-details li {
            padding: 10px;
            border-bottom: 1px dashed #999;
        }
        .or-details li img {
            float: left;
            width: 140px;
            height: 140px;
        }
        .or-details li .det-l,
        .or-details li .det-r {
            float: left;
            width: 230px;
            height: 140px;
            margin-left: 10px;
        }
        .or-details li .det-r {
            float: left;
            width: 315px;
            height: 140px;
            margin-left: 10px;
        }
        .or-details li .det-l {
            border-right: 1px dashed #999;
        }
        .or-details li h2 {
            float: left;
            width: 100%;
            padding: 2px 0;
        }
        .or-details li h2:nth-last-child(1) {
            overflow: hidden;
            height: 40px;
            line-height: 20px;
        }
        .or-details li h3 {
            float: left;
            width: 100%;
            height: 35px;
            margin-top: 10px;
            border-top: 1px dashed #999;
            color: #f00;
            font-weight: bold;
            line-height: 35px;
        }
    </style>
@endsection

@section('body')
    <div class="pc">
        @include('home.layouts.header')
            <div class="content clearfix">
                <h1>我的订单</h1>
                <ul class="or-choose">
                    <li class="on">全部</li>
                    <li>待发货</li>
                    <li>待收货</li>
                    <li>已完成</li>
                </ul>
                <ul class="or-details" style="display:block">
                    @foreach($orders_all as $order)
                        <li>
                        @foreach($order->orderDetail as $list_detail)
                            <div class="or-list clearfix">
                                <img src="{{ $list_detail->commodity->image_0 }}"/>
                                <div class="det-l">
                                    <h2>商品名称：<em>{{ $list_detail->commodity->name }}</em></h2>
                                    <h2>商品规格：<em>{{ $list_detail['remark'] }}</em></h2>
                                    <h2>商品数量：<em>{{ $list_detail['num'] }}</em></h2>
                                    <h2>送货方式：<em>顺丰快递</em></h2>
                                    <h2>商品单号：<em>{{ $order['id'] }}</em></h2>
                                </div>
                                <div class="det-r">
                                    <h2>付款方式：<em>微信支付</em></h2>
                                    <h2>付款时间：<em>{{ $order['created_at'] }}</em></h2>
                                    <h2>收件人：<em>{{ $order['name'] }}</em></h2>
                                    <h2>联系方式：<em>{{ $order['phone'] }}</em></h2>
                                    <h2>收件地址：<em>{{ $order['address'] }}</em></h2>
                                </div>
                            </div>
                            @endforeach
                            <h3>总计：￥<em>{{ $order['price'] }}</em></h3>
                        </li>
                    @endforeach
                </ul>

                <ul class="or-details">
                    @foreach($orders_1 as $order)
                        <li>
                            @foreach($order->orderDetail as $list_detail)
                                <div class="or-list clearfix">
                                    <img src="{{ $list_detail->commodity->image_0 }}"/>
                                    <div class="det-l">
                                        <h2>商品名称：<em>{{ $list_detail->commodity->name }}</em></h2>
                                        <h2>商品规格：<em>{{ $list_detail['remark'] }}</em></h2>
                                        <h2>商品数量：<em>{{ $list_detail['num'] }}</em></h2>
                                        <h2>送货方式：<em>顺丰快递</em></h2>
                                        <h2>商品单号：<em>{{ $order['id'] }}</em></h2>
                                    </div>
                                    <div class="det-r">
                                        <h2>付款方式：<em>微信支付</em></h2>
                                        <h2>付款时间：<em>{{ $order['created_at'] }}</em></h2>
                                        <h2>收件人：<em>{{ $order['name'] }}</em></h2>
                                        <h2>联系方式：<em>{{ $order['phone'] }}</em></h2>
                                        <h2>收件地址：<em>{{ $order['address'] }}</em></h2>
                                    </div>
                                </div>
                            @endforeach
                            <h3>总计：￥<em>{{ $order['price'] }}</em></h3>
                        </li>
                    @endforeach
                </ul>

                <ul class="or-details">
                    @foreach($orders_2 as $order)
                        <li>
                            @foreach($order->orderDetail as $list_detail)
                                <div class="or-list clearfix">
                                    <img src="{{ $list_detail->commodity->image_0 }}"/>
                                    <div class="det-l">
                                        <h2>商品名称：<em>{{ $list_detail->commodity->name }}</em></h2>
                                        <h2>商品规格：<em>{{ $list_detail['remark'] }}</em></h2>
                                        <h2>商品数量：<em>{{ $list_detail['num'] }}</em></h2>
                                        <h2>送货方式：<em>顺丰快递</em></h2>
                                        <h2>商品单号：<em>{{ $order['id'] }}</em></h2>
                                    </div>
                                    <div class="det-r">
                                        <h2>付款方式：<em>微信支付</em></h2>
                                        <h2>付款时间：<em>{{ $order['created_at'] }}</em></h2>
                                        <h2>收件人：<em>{{ $order['name'] }}</em></h2>
                                        <h2>联系方式：<em>{{ $order['phone'] }}</em></h2>
                                        <h2>收件地址：<em>{{ $order['address'] }}</em></h2>
                                    </div>
                                </div>
                            @endforeach
                            <h3>总计：￥<em>{{ $order['price'] }}</em></h3>
                        </li>
                    @endforeach
                </ul>

                <ul class="or-details">
                    @foreach($orders_4 as $order)
                        <li>
                            @foreach($order->orderDetail as $list_detail)
                                <div class="or-list clearfix">
                                    <img src="{{ $list_detail->commodity->image_0 }}"/>
                                    <div class="det-l">
                                        <h2>商品名称：<em>{{ $list_detail->commodity->name }}</em></h2>
                                        <h2>商品规格：<em>{{ $list_detail['remark'] }}</em></h2>
                                        <h2>商品数量：<em>{{ $list_detail['num'] }}</em></h2>
                                        <h2>送货方式：<em>顺丰快递</em></h2>
                                        <h2>商品单号：<em>{{ $order['id'] }}</em></h2>
                                    </div>
                                    <div class="det-r">
                                        <h2>付款方式：<em>微信支付</em></h2>
                                        <h2>付款时间：<em>{{ $order['created_at'] }}</em></h2>
                                        <h2>收件人：<em>{{ $order['name'] }}</em></h2>
                                        <h2>联系方式：<em>{{ $order['phone'] }}</em></h2>
                                        <h2>收件地址：<em>{{ $order['address'] }}</em></h2>
                                    </div>
                                </div>
                            @endforeach
                            <h3>总计：￥<em>{{ $order['price'] }}</em></h3>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
        <script type="text/javascript">
            $(".or-choose li").click(function() {
                $(this).addClass('on').siblings().removeClass('on');
                $(".or-details").hide().eq($(".or-choose li").index(this)).show();
            });
        </script>
@endsection