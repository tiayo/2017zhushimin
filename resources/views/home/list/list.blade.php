@inject('commodiy_class', 'App\Repositories\CommodityRepository')
@inject('index_class', 'App\Services\Home\IndexService')
@inject('category_class', 'App\Services\Manage\CategoryService')

@extends('home.layouts.app')

@section('title', '商品列表')
@section('class', 'goods-list')

@section('body')
    @php
        $category = $category_class->first($category_id)
    @endphp
    <div class="fenlei">
        @include('home.layouts.header')
        <div class="goods">
            <h1>{{ $category['name'] }}</h1>
            <ul class="goods-list clearfix">
                @foreach($category->commodity ?? [] as $commodity)
                    <li class="list">
                        <img src="{{ $commodity['image_0'] }}"/>
                        <a href="{{ route('home.commodity_view', ['commodity_id' => $commodity['id']]) }}">{{ $commodity['name'] }}</a>
                    </li>
                @endforeach

                @foreach($index_class->getCategoryChildren($category_id) as $category_id_children)
                        @foreach($commodiy_class->getByCategory($category_id_children['id']) ?? [] as $commodity)
                            <li class="list">
                                <img src="{{ $commodity['image_0'] }}"/>
                                <a href="{{ route('home.commodity_view', ['commodity_id' => $commodity['id']]) }}">{{ $commodity['name'] }}</a>
                            </li>
                        @endforeach
                @endforeach
            </ul>
        </div>
    </div>
@endsection
@section('script')
@endsection