@extends('behind.public.master')
<style>
    .form-group {
        height: 64px;
    }
</style>
@section('content')
    <section class="panel">
        {{--<header class="panel-heading">--}}
            {{--Basic Forms--}}
        {{--</header>--}}
        <form id="from" role="form" action="/behind/company" onsubmit="return add();" method="post">
        <div class="panel-body">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <div class="col-xs-12 col-sm-12" style="line-height: 32px;">
                    <label for="exampleInputEmail1">公司名称</label>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <input class="form-control" value="{{$own['company_name']}}" name="company_name" id="exampleInputEmail1" placeholder="请输入公司名称" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-12" style="line-height: 32px;">
                    <label for="exampleInputEmail1">公司电话</label>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <input class="form-control" value="{{$own['company_tell']}}" name="company_tell" id="exampleInputEmail1" placeholder="请输入公司电话" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-12" style="line-height: 32px;">
                    <label for="exampleInputEmail1">公司email</label>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <input class="form-control" value="{{$own['company_email']}}" name="company_email" id="exampleInputEmail1" placeholder="请输入公司email" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-12" style="line-height: 32px;">
                    <label for="exampleInputEmail1">公司地址</label>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <input class="form-control" value="{{$own['company_address']}}" name="company_address" id="exampleInputEmail1" placeholder="请输入公司地址" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-12" style="line-height: 32px;">
                    <label for="exampleInputEmail1">公司简介</label>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <textarea name="company_info" id="" cols="50" rows="4">{{$own['company_info']}}</textarea>
                </div>
            </div>
            <div class="form-group" style="margin-top: 100px;">
                <button type="submit" class="col-xs-12 col-md-12 btn btn-info">点击保存</button>
            </div>
        </div>
        </form>
    </section>

@endsection
<script>
    function add() {
        var formData = new FormData(document.getElementById("from"));
        $.ajax({
            cache: true,
            type: "post",
            contentType:false,
            processData:false,
            data:formData,// 你的formid
            async: true,
            error: function(request) {
                alert("Connection error");
            },
            success: function(data) {
                if(data.code != 10000){
                    alert(data.msg);
                }else{
                    location.reload();
                }
            }
        });
        return false;
    };
</script>
