@extends('home.layouts.app')

@section('title', '注册')

@section('style')
    <style type="text/css">
        .content {
            width: 1000px;
            margin: 50px auto;
            padding: 10px 50px;
        }
        .content h1 {
            padding: 10px 10px 10px 25px;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }
        .login-detial {
            width: 300px;
            margin: 10px auto;
        }
        .login-detial input {
            display: block;
            width: 100%;
            height: 35px;
            margin-top: 10px;
            outline: none;
        }
        .login-btn {
            width: 302px;
            height: 35px;
            margin-top: 20px;
        }
        .login-btn button {
            display: inline-block;
            width: 100%;
            height: 100%;
            outline: none;
            border: 0;
            cursor: pointer;
        }
        .registration {
            display: block;
            width: 200px;
            height: 20px;
            margin: 20px auto;
            text-align: center;
            line-height: 20px;
        }
    </style>
@endsection

@section('body')
    @include('home.layouts.header')
    <form class="login" method="post" action="{{ route('home.register') }}">
        {{ csrf_field() }}
        <div class="content">
            <h1>注册</h1>
            <div class="login-detial">
                <div class="form-input">
                    <input type="email" name="email" placeholder="请输入邮箱" required/>
                </div>
                <div class="form-input">
                    <input type="password" name="password" placeholder="请输入密码" required/>
                </div>
                <div class="form-input">
                    <input type="password" name="password_confirmation" placeholder="请再次输入密码密码" required/>
                </div>
                <div class="form-input">
                    <input type="text" name="name" placeholder="请输入用户名" required/>
                </div>
                <div class="form-input">
                    <input type="text" name="phone" placeholder="请输入电话号码"/>
                </div>
                <div class="form-input">
                    <input type="text" name="address" placeholder="请输入您的收货地址"/>
                </div>
                <div class="login-btn">
                    <button>注册</button>
                </div>
            </div>
            <a href="{{ route('home.login') }}" class="registration">已经有账号？点击登录</a>
        </div>
    </form>
    <script>
        @foreach($errors->all() as $error)
            alert('{{ $error }}');
        @endforeach
    </script>
@endsection