<style>
    body{
        font-family: "Segoe UI","Lucida Grande",Helvetica,Arial,"Microsoft YaHei",FreeSans,Arimo,"Droid Sans","wenquanyi micro hei","Hiragino Sans GB","Hiragino Sans GB W3","FontAwesome",sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
        background-color: #fff;
    }
    #header .navbar-default {
        border: 0;
        margin-bottom: 0;
        /*border-bottom: 2px solid #0ba1e4;*/
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        /*background-color: rgba(255,255,255,0.9);*/
        background-color: #FFFFFF;
    }
    #header .navbar-default .navbar-nav>.active>a,
    #header .navbar-default .navbar-nav>li>a:hover,
    #header .navbar-default .navbar-nav>li>a:focus {
        color: #0ba1e4;
        background-color: rgba(255, 255, 255, 0);
    }
    #header .navbar-default .navbar-nav>li .line-top {
        border-top: 1px solid #0ba1e4;
        width: 18px;
        margin: auto;
    }
    #header .navbar-default .navbar-nav>li>a{

    }
    @media (max-width:768px){
        #header .navbar-default .navbar-nav>li>a{
            /*color: #555;*/
            font-size: 16px;
        }
    }
    @media screen and (min-width: 768px) {
        #header .navbar-default .navbar-nav>li>a {
            color: #555;
            font-size: 18px;
            padding: 16px 30px 5px !important;
        }
        #header .navbar {
            border-radius: 0;
            padding: 15px 0;
        }
        /*.navbar-header{*/
            /*width: 24%;*/
        /*}*/
        /*.navbar-collapse{*/
            /*width: 56%;*/
        /*}*/
        .navbar-login{
            margin-top: 3px;
        }
    }
</style>
<div id="header">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header col-sm-3" style="background-color: white;">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="padding:0 0 0 15px;" href="">
                    <img alt="Brand" style="max-width:203px;" src="/jingzhefangchanlvshi.png">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse col-sm-7" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li @if(Request::path() == '/') class="active" @endif>
                        <a href="/">首页 <span class="sr-only">(current)</span></a>
                        @if(Request::path() == '/') <p class="line-top hidden-xs"></p> @endif
                    </li>
                    <li @if(Request::path() == 'services') class="active" @endif>
                        <a href="/services">专业领域</a>
                        @if(Request::path() == 'services') <p class="line-top hidden-xs"></p> @endif
                    </li>
                    <li @if(Request::path() == 'team') class="active" @endif>
                        <a href="/team">律师团队</a>
                        @if(Request::path() == 'team') <p class="line-top hidden-xs"></p> @endif
                    </li>
                    <li @if(Request::path() == 'news') class="active" @endif>
                        <a href="/news">律师行业新闻</a>
                        @if(Request::path() == 'news') <p class="line-top hidden-xs"></p> @endif
                    </li>
                    <li @if(Request::path() == 'about_us') class="active" @endif>
                        <a href="/about_us">联系我们</a>
                        @if(Request::path() == 'about_us') <p class="line-top hidden-xs"></p> @endif
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-login col-sm-2">
                <ul class="nav pull-right hidden-xs">
                    <li><a href="/sign_in" class="btn btn-default">登陆</a></li>
                </ul>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
</div>
    <script type="text/javascript">
        // 导航菜单交互
        $(document).ready(function () {
            // 鼠标悬停
//            $(".nav li").hover(
//                function () {
//                    //鼠标悬停子菜单
//                    // $("ul", this).fadeIn();
//                    $("ul",this).stop().slideDown();
//                    $("a",this).eq(0).addClass("on");
//
//                },
//                // 鼠标移除
//                function () {
//                    $("ul", this).stop().slideUp();
//                    $("a",this).eq(0).removeClass("on");
//                }
//            );
        });
    </script>
