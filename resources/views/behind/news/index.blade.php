@extends('behind.public.master')
@section('style')
    <style>
        .select{
        }
    </style>
@endsection
@section('content')
    <div class="col-lg-12">
        <section class="form-group">
                <a type="button" onclick="return addOrEdit('/behind/news/create','新闻类别添加',['500px','600px']);"  class="btn btn-primary">新闻类别添加</a>
        </section>

        <section class="panel">
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th><i class="icon-bullhorn"></i> 序号</th>
                    <th class="hidden-phone"><i class="icon-question-sign"></i> 新闻类别名称</th>
                    <th class="hidden-phone"><i class="icon-question-sign"></i> 创建时间</th>
                    <th class="hidden-phone"><i class="icon-question-sign"></i> 修改时间</th>
                    <th><i class="icon-bookmark"></i> 操作</th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($list['data']))
                    @foreach($list['data'] as $k=>$v)
                        <tr>
                            <td><a href="#">{{$k+1}}</a></td>
                            <td>{{$v->news_name}}</td>
                            <td>{{$v->created_at}}</td>
                            <td>{{$v->updated_at}}</td>
                            <td>
                                <button onclick="return addOrEdit('/behind/news/{{$v->news_id}}/edit','新闻类别编辑',['800px','800px']);" class="btn btn-primary btn-xs">编辑</button>
                                <button onclick="return remove('/behind/news/{{$v->news_id}}');" class="btn btn-danger btn-xs">删除</button>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </section>
    </div>
@endsection
@section('script')
@endsection