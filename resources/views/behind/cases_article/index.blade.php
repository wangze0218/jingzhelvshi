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
                <a type="button" onclick="return addOrEdit('/behind/cases_article/create','案例内容添加',['1200px','600px']);"  class="btn btn-primary">添加案例内容</a>
        </section>

        <section class="panel">
            <div class="select row col-sm-12 panel-heading">
                <div class="col-md-2  pull-left">
                    案例内容列表
                </div>
                <form action="/behind/cases_article" method="get">
                    <div class="col-md-1 pull-right">
                        <button type="submit"  class="btn btn-shadow btn-default">搜索</button>
                    </div>
                    <div class="col-md-2 pull-right">
                        <select class="colorpicker-default form-control" name="rel_type_id" id="">
                            @foreach($article_all_type as $k=>$v)
                                <option @if($search['rel_type_id'] == $v['cases_id']) selected @endif value="{{$v['cases_id']}}">{{$v['cases_name']}}</option>
                            @endforeach
                        </select>
                    </div>

                </form>
            </div>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th><i class="icon-bullhorn"></i> 序号</th>
                    <th class="hidden-phone"><i class="icon-question-sign"></i> 案例内容标题</th>
                    <th><i class=" icon-tasks"></i> 案例内容标题图片</th>
                    <th><i class=" icon-edit"></i> 案例内容标题详情</th>
                    <th><i class="icon-bookmark"></i> 操作</th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($list['data']))
                    @foreach($list['data'] as $k=>$v)
                        <tr>
                            <td><a href="#">{{$k+1}}</a></td>
                            <td>{{$v['title']}}</td>
                            <td><img style="width: 100px;height: 30px;" src="{{$v['title_img']}}" alt=""></td>
                            <td>{{$v['title_describe']}}</td>
                            <td>
                                {{--<button onclick="return remove('/behind/article/{{$v->article_id}}');" class="btn btn-danger btn-xs">查看</button>--}}
                                <button onclick="return addOrEdit('/behind/cases_article/{{$v['article_id']}}/edit','案例内容编辑',['800px','800px']);" class="btn btn-primary btn-xs">编辑</button>
                                <button onclick="return remove('/behind/cases_article/{{$v['article_id']}}');" class="btn btn-danger btn-xs">删除</button>
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