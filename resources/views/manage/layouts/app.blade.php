<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>@yield('title')-{{config('site.title')}}</title>
    @section('style')
        <!--icheck-->
        <link href="{{ asset('/static/adminex/js/iCheck/skins/minimal/minimal.css') }}" rel="stylesheet">
        <link href="{{ asset('/static/adminex/js/iCheck/skins/square/square.css') }}" rel="stylesheet">
        <link href="{{ asset('/static/adminex/js/iCheck/skins/square/red.css') }}" rel="stylesheet">
        <link href="{{ asset('/static/adminex/js/iCheck/skins/square/blue.css') }}" rel="stylesheet">
        <!--common-->
        <link href="{{ asset('/static/adminex/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('/static/adminex/css/style-responsive.css') }}" rel="stylesheet">
    @show

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="{{ asset('/static/adminex/js/html5shiv.js') }}"></script>
  <script src="{{ asset('/static/adminex/js/respond.min.js') }}"></script>
  <![endif]-->
    <style>
        .panel{
            background-color: #f1f1f1;
        }

        .btn-info, .btn-warning, .btn-success, .btn-danger{
            background-color: #000;
            border: none;
        }

        .btn-info:hover, .btn-warning:hover, .btn-success:hover, .btn-danger:hover{
            background: #333;
        }

        .form-control {
            border-radius: 0;
            border: none;
        }

        .table{
            box-shadow: 1px 1px 5px #000, 1px 1px 5px #000;
        }

        .panel-body{
            box-shadow: 1px 1px 5px #000, 1px 1px 5px #000;
        }
    </style>
</head>

<body class="sticky-header">

<section>
    <!-- header section start-->
    <div class="header-section">
        <span style="height: 45px;line-height: 45px;padding-left: 2em;">{{ config('site.title') }} - 管理员平台</span>
        <div class="menu-right">
            <ul class="notification-menu">
                <li>

                </li>
                <li style="height: 44px; line-height: 44px;">
                    <a href="#" class="btn" data-toggle="dropdown" style="color: #000;background: #fff">当前帐号:{{ Auth::guard()->user()['name'] }}</a>
                    <a style="color: black;background: #fff" class="btn" href="{{ route('manage.logout') }}">退出登录</a>
                </li>

            </ul>
        </div>
    </div>
    <!-- header section end-->

    <!-- left side start-->
    <div class="left-side sticky-left-side">
        <div class="left-side-inner">
            @include('manage.layouts.sidebar')
        </div>
    </div>
    <!-- left side end-->

    <!-- main content start-->
    <div class="main-content" >
        <!--body wrapper start-->
        <div class="wrapper">
            {{--面包屑开始--}}
            <div class="row">
                <div class="col-md-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb panel">
                        <li><a href="{{ route('manage') }}"><i class="fa fa-home"></i>主页</a></li>
                        @section('breadcrumb')

                        @show
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>
            {{--面包屑结束--}}

            @section('body')

            @show
        </div>
        <!--body wrapper end-->
    </div>
    <!-- main content end-->
</section>

@section('script')
<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ asset('/static/adminex/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('/static/adminex/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ asset('/static/adminex/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('/static/adminex/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/static/adminex/js/modernizr.min.js') }}"></script>
<script src="{{ asset('/static/adminex/js/jquery.nicescroll.js') }}"></script>

<!--icheck -->
<script src="{{ asset('/static/adminex/js/iCheck/jquery.icheck.js') }}"></script>
<script src="{{ asset('/static/adminex/js/icheck-init.js') }}"></script>

<!--common scripts for all pages-->
<script src="{{ asset('/static/adminex/js/scripts.js') }}"></script>

{{--自动打开菜单层级--}}
<script type="text/javascript">
    $(document).ready(function () {
        var num = $('.breadcrumb li').length;
        for (i=0; i<=num; i++) {
            var nav_value = $('.breadcrumb li:eq('+i+')').attr('navValue');
            $('#'+nav_value).addClass('active nav-active');
        }
    })
</script>

{{--转换搜索链接--}}
<script type="text/javascript">

</script>
@show
</body>
</html>