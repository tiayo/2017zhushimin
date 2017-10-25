@extends('home.layouts.app')

@section('title', '首页')

@section('style')
    <style type="text/css">
        .banner {
            width: 1000px;
            margin: 50px auto;
        }
        .banner .banner-left {
            float: left;
            width: 150px;
            box-shadow: 3px 3px #999,
            -3px -3px #999;
        }
        .banner .banner-left li {
            white-space:nowrap;
            overflow:hidden;
            text-overflow:ellipsis;
            width: 70%;
            height: 40px;
            margin: 0 auto;
            border-bottom: 1px dashed #000;
            font-size: 16px;
            text-align: center;
            line-height: 40px;
        }
        .banner .banner-left li:nth-last-child(1) {
            border-bottom: 0;
        }
        .banner .banner-right {
            float: right;
            width: 825px;
        }
        .banner .banner-right img {
            float: left;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection

@section('body')
    <div class="index">
        @include('home.layouts.header')
        <div class="goods">
            <h1>所有商品</h1>
            <ul class="goods-list clearfix">
                @foreach($commodities as $commodity)
                    <li class="list">
                        <img src="{{ $commodity['image_0'] }}"/>
                        <a href="{{ route('home.commodity_view', ['commodity_id' => $commodity['id']]) }}">{{ $commodity['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection