<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="华云数海">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>华云数海</title>
    @include('behind.public.style')
    @yield('style')

    <script src="{{asset('FlatLab/js/html5shiv.js')}}"></script>
    <script src="{{asset('FlatLab/js/respond.min.js')}}"></script>

    @include('behind.public.script')

    {{--编辑器--}}
    <script type="text/javascript" charset="utf-8" src="{{asset("ueditor-php/ueditor.config.js")}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset("ueditor-php/ueditor.all.min.js")}}"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="{{asset("ueditor-php/lang/zh-cn/zh-cn.js")}}"></script>

</head>

<body>


<section id="container" >

    {{--<section id="main-content">--}}

            @yield('content')


    {{--</section>--}}
</section>

@include('behind.public.script')
@yield('script')

<script>
    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });
        function add(url) {
            var formData = new FormData(document.getElementById("from"));
            console.log(formData);
            $.ajax({
                cache: true,
                type: "post",
                url:url,
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
                        var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
                        parent.layer.close(index);
                        parent.location.reload();
                    }
                }
            });
            return false;
        };
        function update(url) {
            $.ajax({
                cache: true,
                type: "PUT",
                url:url,
                data:$('#from').serialize(),// 你的formid
                async: true,
                error: function(request) {
                    alert("Connection error");
                },
                success: function(data) {
                    if(data.code != 10000){
                        alert(data.msg);
                    }else{
                        var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
                        parent.layer.close(index);
                        parent.location.reload();
                    }
                }
            });
            return false;
        }


</script>
</body>
</html>
