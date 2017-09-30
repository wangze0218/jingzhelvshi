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
        border-bottom: 2px solid #0ba1e4;
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
    @media screen and (min-width: 768px) {
        #header .navbar-default .navbar-nav>li>a {
            font-size: 16px;
            padding: 16px 30px 5px !important;
        }
        #header .navbar {
            border-radius: 0;
            padding: 15px 0;
        }
        .container{
            width: 970px;
        }
    }
</style>
<div id="header">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="background-color: white;">
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
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="">首页 <span class="sr-only">(current)</span></a><p class="line-top hidden-xs"></p></li>
                    <li class=""><a href="">专业领域</a></li>
                    <li><a href="">律师团队</a></li>
                    <li><a href="">律师行业新闻</a></li>
                    <li><a href="">联系我们</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
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
