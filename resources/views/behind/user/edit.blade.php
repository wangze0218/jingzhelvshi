@extends('behind.public.slave')

@section('content')
    <section class="panel">
        {{--<header class="panel-heading">--}}
            {{--Basic Forms--}}
        {{--</header>--}}
        <div class="panel-body">
            <form id="from" role="form" action="/behind/user" onsubmit="return update('{{'/behind/user/'.$user->user_id}}');" method="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">用户名称</label>
                    <input class="form-control" value="{{$user->user_name}}" name="identity" id="exampleInputEmail1" placeholder="请输入用户名称" type="text">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">用户密码</label>
                    <input class="form-control" name="password" id="exampleInputPassword1" placeholder="请输入用户密码" type="password">
                </div>
                <button type="submit" class="btn btn-info">提交</button>
            </form>

        </div>
    </section>

@endsection
