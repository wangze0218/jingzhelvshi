@extends('behind.public.slave')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <div class="panel-body">
                    <form action="/behind/article" role="form" id="from" method = 'post' onsubmit="return add('/behind/article/');" enctype="multipart/form-data" class="form-horizontal tasi-form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="control-label col-md-3">文章类型</label>
                            <div class="col-md-4">
                                <select class="colorpicker-default form-control" name="article_type" id="">
                                    <option value="1">产品与服务</option>
                                    <option value="2">案例</option>
                                    <option value="3">新闻</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">标题</label>
                            <div class="col-md-4">
                                <input type="text" name="title" class="colorpicker-default form-control" value="请输入标题">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">标题详情</label>
                            <div class="col-md-4">
                                <textarea name="title_describe" id="" cols="50" rows="4"></textarea>
                                {{--<input type="text" name="title" class="colorpicker-default form-control" value="请输入标题">--}}

                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">上传标题图片</label>
                            <div class="col-md-9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">

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
                                <script id="editor" type="text/plain" style="width:1024px;height:500px;"></script>
                                <div>
                                    {{--<button onclick="getAllHtml()">获得整个html的内容</button>--}}
                                    <a onclick="getContent()">获得内容</a>
                                    {{--<button onclick="setContent()">写入内容</button>--}}
                                    {{--<button onclick="setContent(true)">追加内容</button>--}}
                                    {{--<button onclick="getContentTxt()">获得纯文本</button>--}}
                                    {{--<button onclick="getPlainTxt()">获得带格式的纯文本</button>--}}
                                    {{--<button onclick="hasContent()">判断是否有内容</button>--}}
                                    {{--<button onclick="setFocus()">使编辑器获得焦点</button>--}}
                                    {{--<button onmousedown="isFocus(event)">编辑器是否获得焦点</button>--}}
                                    {{--<button onmousedown="setblur(event)" >编辑器失去焦点</button>--}}

                                </div>
                                <div>
                                    {{--<button onclick="getText()">获得当前选中的文本</button>--}}
                                    {{--<button onclick="insertHtml()">插入给定的内容</button>--}}
                                    {{--<button id="enable" onclick="setEnabled()">可以编辑</button>--}}
                                    {{--<button onclick="setDisabled()">不可编辑</button>--}}
                                    <a onclick=" UE.getEditor('editor').setHide()">隐藏编辑器</a>
                                    <a onclick=" UE.getEditor('editor').setShow()">显示编辑器</a>
                                    {{--<button onclick=" UE.getEditor('editor').setHeight(300)">设置高度为300默认关闭了自动长高</button>--}}
                                </div>
                                <div>
                                    <a onclick="getLocalData()" >获取草稿箱内容</a>
                                    <a onclick="clearLocalData()" >清空草稿箱</a>
                                </div>
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

        //实例化编辑器
        //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
        var ue = UE.getEditor('editor');


        function isFocus(e){
            alert(UE.getEditor('editor').isFocus());
            UE.dom.domUtils.preventDefault(e)
        }
        function setblur(e){
            UE.getEditor('editor').blur();
            UE.dom.domUtils.preventDefault(e)
        }
        function insertHtml() {
            var value = prompt('插入html代码', '');
            UE.getEditor('editor').execCommand('insertHtml', value)
        }
        function createEditor() {
            enableBtn();
            UE.getEditor('editor');
        }
        function getAllHtml() {
            alert(UE.getEditor('editor').getAllHtml())
        }
        function getContent() {
            var arr = [];
            arr.push("使用editor.getContent()方法可以获得编辑器的内容");
            arr.push("内容为：");
            arr.push(UE.getEditor('editor').getContent());
            alert(arr.join("\n"));
        }
        function getPlainTxt() {
            var arr = [];
            arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
            arr.push("内容为：");
            arr.push(UE.getEditor('editor').getPlainTxt());
            alert(arr.join('\n'))
        }
        function setContent(isAppendTo) {
            var arr = [];
            arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
            UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
            alert(arr.join("\n"));
        }
        function setDisabled() {
            UE.getEditor('editor').setDisabled('fullscreen');
            disableBtn("enable");
        }

        function setEnabled() {
            UE.getEditor('editor').setEnabled();
            enableBtn();
        }

        function getText() {
            //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
            var range = UE.getEditor('editor').selection.getRange();
            range.select();
            var txt = UE.getEditor('editor').selection.getText();
            alert(txt)
        }

        function getContentTxt() {
            var arr = [];
            arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
            arr.push("编辑器的纯文本内容为：");
            arr.push(UE.getEditor('editor').getContentTxt());
            alert(arr.join("\n"));
        }
        function hasContent() {
            var arr = [];
            arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
            arr.push("判断结果为：");
            arr.push(UE.getEditor('editor').hasContents());
            alert(arr.join("\n"));
        }
        function setFocus() {
            UE.getEditor('editor').focus();
        }
        function deleteEditor() {
            disableBtn();
            UE.getEditor('editor').destroy();
        }
        function disableBtn(str) {
            var div = document.getElementById('btns');
            var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
            for (var i = 0, btn; btn = btns[i++];) {
                if (btn.id == str) {
                    UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
                } else {
                    btn.setAttribute("disabled", "true");
                }
            }
        }
        function enableBtn() {
            var div = document.getElementById('btns');
            var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
            for (var i = 0, btn; btn = btns[i++];) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            }
        }

        function getLocalData () {
            alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
        }

        function clearLocalData () {
            UE.getEditor('editor').execCommand( "clearlocaldata" );
            alert("已清空草稿箱")
        }
    </script>

@endsection