@extends('behind.public.master')

@section('content')
    <div class="col-lg-12">
        <section class="form-group">
            @if(\Session('user_login')->user_admin == 1)
                <a type="button" onclick="return addOrEdit('/behind/user/create','用户添加',[500,300]);"  class="btn btn-primary">添加用户</a>
            @endif
        </section>


        <section class="panel">
            <header class="panel-heading">
                用户列表
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th><i class="icon-bullhorn"></i> 序号</th>
                    <th class="hidden-phone"><i class="icon-question-sign"></i> 用户姓名</th>
                    <th><i class=" icon-tasks"></i> 用户类型</th>
                    <th><i class=" icon-edit"></i> 状态</th>
                    @if(\Session('user_login')->user_admin == 1)
                        <th><i class="icon-bookmark"></i> 操作</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                    @if(!empty($list))
                        @foreach($list['data'] as $k=>$v)
                            <tr>
                                <td><a href="#">{{$k+1}}</a></td>
                                <td>{{$v->user_name}}</td>
                                @if($v->user_admin == 0)
                                    <td class="hidden-phone">普通用户</td>
                                @else
                                    <td class="hidden-phone">管理员</td>
                                @endif
                                <td><span class="label label-info label-mini">正常</span></td>
                                @if(\Session('user_login')->user_admin == 1)
                                <td>
                                    <button onclick="return addOrEdit('/behind/user/{{$v->user_id}}/edit','用户编辑',[500,300]);" class="btn btn-primary btn-xs">编辑</button>
                                    <button onclick="return remove('/behind/user/{{$v->user_id}}');" class="btn btn-danger btn-xs">删除</button>
                                </td>
                                @endif
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