@inject('commodiy_class', 'App\Repositories\CommodityRepository')
@inject('index_class', 'App\Services\Home\IndexService')
@inject('category_class', 'App\Services\Manage\CategoryService')

@extends('home.layouts.app')

@section('title', '搜索结果')
@section('class', 'goods-list')

@section('body')

    <div class="fenlei">
        @include('home.layouts.header')
        <div class="goods">
            <h1>搜索结果</h1>
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
@section('script')
@endsection