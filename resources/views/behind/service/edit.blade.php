@extends('behind.public.slave')

@section('content')
    <section class="panel">
        {{--<header class="panel-heading">--}}
            {{--Basic Forms--}}
        {{--</header>--}}
        <div class="panel-body">
            <form id="from" role="form" action="/behind/service/{{$service['service_id']}}" onsubmit="return update('{{'/behind/service/'.$service['service_id']}}');" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="exampleInputEmail1">服务类别名称</label>
                    <input class="form-control" name="service_name" id="service" value="{{$service['service_name']}}" placeholder="请输入服务类别名称" type="text">
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-md-12" for="exampleInputEmail1">服务领域</label>
                    <div class="col-xs-11 col-md-11" id="service_areas">
                        @if(!empty($service['service_areas']))
                            @foreach($service['service_areas'] as $k=>$v)
                                <input type="text" name="service_areas[]" class="form-control" value="{{$v}}" placeholder="服务领域">
                            @endforeach
                        @else
                            <input type="text" name="service_areas[]" class="form-control" placeholder="服务领域">
                        @endif
                    </div>
                    <div class="col-xs-1 col-md-1 text-center">
                        <a onclick="return addOne('service_areas');" class="btn btn-primary ">加</a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-md-12" for="exampleInputEmail1">概述</label>
                    <div class="col-xs-11 col-md-11" id="summary">
                        @if(!empty($service['summary']))
                            @foreach($service['summary'] as $k=>$v)
                                <textarea name="summary[]" id="" cols="50" rows="4">{{$v}}</textarea>
                            @endforeach
                        @else
                            <textarea name="summary[]" id="" cols="50" rows="4"></textarea>
                        @endif
                    </div>
                    <div class="col-xs-1 col-md-1 text-center" id="summary">
                        <a onclick="return addOne('summary');" class="btn btn-primary ">加</a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-md-12" for="exampleInputEmail1">首页话题</label>
                    <div class="col-xs-11 col-md-11" id="topic">
                        <textarea name="topic" id="" cols="50" rows="4">{{$service['topic']}}</textarea>
                    </div>
                </div>
                <div class="form-group" style="margin-top: 100px;">
                    <button type="submit" class="col-xs-12 col-md-12 btn btn-info">提交</button>
                </div>
            </form>

        </div>
    </section>

@endsection
@section('script')
    <script>
        function dom(id,elements) {
            var dom = $('#'+id);
            dom.append(elements);
        }
        function addOne(type) {
            switch (type){
                case 'service_areas':
                    var elements = '<input type="text" name="service_areas[]" class="form-control" placeholder="服务领域">';
                    dom('service_areas',elements);
                    break;
                case 'summary':
                    var elements = '<textarea name="summary[]" id="" cols="50" rows="4"></textarea>';
                    dom('summary',elements);
                    break;
                default:
                    break;
            }
        }
    </script>
@endsection