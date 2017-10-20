@extends('manage.layouts.app')

@section('title', '主页')

@section('style')
    <!--dashboard calendar-->
    <link href="{{ asset('/static/adminex/css/clndr.css') }}" rel="stylesheet">
    @parent
@endsection

@section('breadcrumb')

@endsection

@section('body')
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    服务状态
                </header>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">操作系统</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" value="Ubuntu 16.04 LTS" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">服务器时间</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" value="{{ date('Y-m-d H:i:s') }}" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">PHP版本</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" value="PHP7.1" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">框架</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" value="Laravel 5.5" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Composer版本</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" value="1.3.2" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">访问ip</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" value="{{ Request::getClientIp() }}" disabled>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('script')
    @parent
    <!--Calendar-->
    <script src="{{ asset('/static/adminex/js/calendar/clndr.js') }}"></script>
    <script src="{{ asset('/static/adminex/js/calendar/evnt.calendar.init.js') }}"></script>
    <script src="{{ asset('/static/adminex/js/calendar/moment-2.2.1.js') }}"></script>
    <script src="{{ asset('http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js') }}"></script>

@endsection
