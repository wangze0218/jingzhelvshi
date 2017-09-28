@extends('behind.public.slave')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <div class="panel-body">
                    <form action="/behind/article/{{$article->article_id}}" role="form" id="from" method = 'post' onsubmit="return update('/behind/article/{{$article->article_id}}');" enctype="multipart/form-data" class="form-horizontal tasi-form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        {{--<input type="hidden" name="_method" value="PUT">--}}
                        <div class="form-group">
                            <label class="control-label col-md-3">文章类型</label>
                            <div class="col-md-4">
                                <select class="colorpicker-default form-control" name="article_type" id="">
                                    <option @if($article->article_type == 1) selected @endif value="1">产品与服务</option>
                                    <option @if($article->article_type == 2) selected @endif value="2">案例</option>
                                    <option @if($article->article_type == 3) selected @endif value="3">新闻</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">标题</label>
                            <div class="col-md-4">
                                <input type="text" name="title" class="colorpicker-default form-control" value="{{$article->title}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">标题详情</label>
                            <div class="col-md-4">
                                <textarea name="title_describe" id="" cols="50" rows="4">{{$article->title_describe}}</textarea>
                                {{--<input type="text" name="title" class="colorpicker-default form-control" value="请输入标题">--}}

                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">上传标题图片</label>
                            <div class="col-md-9">
                                <div class="fileupload fileupload-exists" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                        <img src="{{$article->title_img}}" alt="">
                                    </div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" name="title_img" class="default">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="container">
                                <script id="editor" type="text/plain" style="width:1024px;height:500px;">{!! $article->content !!}</script>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default btn-lg btn-block">提交文章</button>
                    </form>

                </div>
            </section>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
        var ue = UE.getEditor('editor');

    </script>

@endsection