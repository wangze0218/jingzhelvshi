@extends('behind.public.slave')

@section('content')
    <section class="panel">
        {{--<header class="panel-heading">--}}
            {{--Basic Forms--}}
        {{--</header>--}}
        <div class="panel-body">
            <form id="from" role="form" action="/behind/cases/{{$cases->cases_id}}" onsubmit="return update('{{'/behind/cases/'.$cases->cases_id}}');" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="exampleInputEmail1">案例类别名称</label>
                    <input class="form-control" name="cases_name" id="cases" value="{{$cases->cases_name}}" placeholder="请输入案例类别名称" type="text">
                </div>
                <button type="submit" class="btn btn-info">提交</button>
            </form>

        </div>
    </section>

@endsection
@section('script')

@endsection