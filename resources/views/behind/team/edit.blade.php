@extends('behind.public.slave')

@section('content')
    <section class="panel">
        {{--<header class="panel-heading">--}}
            {{--Basic Forms--}}
        {{--</header>--}}
        <div class="panel-body">
            <form id="from" role="form" action="/behind/team" onsubmit="return update('{{'/behind/team/'.$team->team_id}}');" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">团队类别名称</label>
                    <input class="form-control" name="team_name" id="team" value="{{$team->team_name}}" placeholder="请输入团队类别名称" type="text">
                </div>
                <button type="submit" class="btn btn-info">提交</button>
            </form>

        </div>
    </section>

@endsection
@section('script')

@endsection