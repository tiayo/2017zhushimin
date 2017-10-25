@extends('home.layouts.app')

@section('title', '首页')

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