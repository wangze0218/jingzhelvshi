@extends('behind.public.slave')

@section('content')
    <section class="panel">
        {{--<header class="panel-heading">--}}
            {{--Basic Forms--}}
        {{--</header>--}}
        <div class="panel-body">
            <form id="from" role="form" action="/behind/news" onsubmit="return update('{{'/behind/news/'.$news->news_id}}');" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">新闻类别名称</label>
                    <input class="form-control" name="news_name" id="news" value="{{$news->news_name}}" placeholder="请输入新闻类别名称" type="text">
                </div>
                <button type="submit" class="btn btn-info">提交</button>
            </form>

        </div>
    </section>

@endsection
@section('script')

@endsection