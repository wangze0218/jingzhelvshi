@extends('front.public.master')
@section('style')
    <style>
        .headlines {
            margin-top: 70px;
            margin-bottom: 30px;
            /*font-size: 32px;*/
            font-weight: bold;
            background-image: url(http://www.zjacls.com/skin/ance/images/h2line.jpg);
            background-repeat: repeat-x;
            /*margin-top: 80px;*/
            /*margin-bottom: 40px;*/
            height: 38px;
            line-height: 38px;
        }
        .headlines span {
            font-weight: 600;
            display: inline-block;
            padding-left: 20px;
            padding-right: 20px;
            background-color: #FFFFFF;
        }
    </style>
    <style>
        @media screen and (min-width: 768px) {
            #services{
                background-color: #ffffff;
                /*background-color: #f5f5f5;*/
                /*padding: 50px 0px 0px;*/
            }
            #carousel-example-generic{
                width: 100%;
                height: 378px;
                overflow: hidden;
                margin-top: 80px;
            }
            #tellpnone_{
                display: none;
            }

        }
        @media (max-width: 767px) {
            #services{
                /*background-color: #f5f5f5;*/
                background-color: #ffffff;
                /*padding: 50px 0px 0px;*/
            }
            #carousel-example-generic{
                display: none;
            }
            #tellpnone_{
                width: 100%;
                height: 100%;
                overflow: hidden;
                margin-top: 50px;
                background:url('/img/banner_1.jpg') center top ;
                /*-webkit-background-size:100% 100%;*/
                /*background-size:100% 100%;*/
            }
            .card {
                width: 220px;
                height: 284px;
                position: absolute;
                top: 50%;
                left: 50%;
                margin-left: -110px;
                margin-top: -130px;
                /*background-color: rgba(255, 255, 255, 1);*/
                padding: 40px 40px;
            }
            .card p {
                font-size: 60px;
                color:white ;
                line-height: 0.92;
                margin-bottom: 10px;
                letter-spacing:10px;
            }
            .glyphicon{
                color: white;
            }
        }
        /*service*/
        .service-item{
            -webkit-transition: all 0.225s ease-in-out;
            -moz-transition: all 0.225s ease-in-out;
            -o-transition: all 0.225s ease-in-out;
            transition: all 0.225s ease-in-out;
            /*background-color: #fafafa;*/
            background-color: #ffffff;

            /*border: 1px solid #389bfa;*/
            border-radius:3px;
            padding: 10px;
            color:#777;
            margin-top: 20px;
        }
        .service-item:hover,
        .service-item:focus{
            background-color: #389bfa;
            border: 1px solid #389bfa;
            color: #faf8f9;
        }
        .service-item p{
            margin: 20px auto;
            width: 90%;
        }
        .service-item .service-item-title{
            border-bottom:1px solid #949494;
        }
        .service-item:hover>.service-item-title,
        .service-item:focus>.service-item-title{
            border-bottom:1px solid #fafafa ;
        }
        #about p{
            font-size: 15px;
        }

        @media screen and (min-width: 768px) {
            #about {
                background-color: #ffffff;
                /*background-color: #f5f5f5;*/
                color: #363636;
            }
            #about .addr address {
                margin: 15px 0 0 4px;
                letter-spacing: 2px;
            }
            .about-describe{
                padding: 15px 15px;
                text-indent: 32px;
                letter-spacing: 3px;
            }
            #carousel-example-generic img{
                width:100%;
                height: 378px;
            }
        }
        @media (max-width: 767px) {
            #carousel-example-generic{
                display: none;
            }
            #about{
                text-align:center;
            }
            #about {
                border-top-width:60%;
                background-color: #ffffff;
                /*background-color: #f5f5f5;*/
                color: #363636;
            }
            .about-describe{
                padding: 0px 39px;
            }
        }
    </style>
    <style>
        /*.cases{*/
            /*padding: 50px 0px;*/
        /*}*/

        #news ul {
            padding-left: 24px;
            height: 100%;
            margin-bottom: 40px;
        }

        #news li {
            font-size: 14px;
            line-height: 37px;
            background-image: url(http://www.zjacls.com/skin/ance/images/36.gif);
            background-repeat: no-repeat;
            background-position: 0 center;
            height: 39px;
            overflow: hidden;
            display: block;
        }
        #news li a{
            width: 75%;
            display: block;
            float: left;
            padding-left: 0px;
        }
        .cases li span{
            width: 15%;
            color: #999999;
            font-size: 12px;
        }
        #news li p{
            margin:0 0;
            width: 90%;
            border-bottom: dotted #ddd 1px;

        }
        a {
            color: #666666;
            text-decoration: none;
        }
        @media screen and (min-width: 768px) {

        }
        @media (max-width: 767px) {

        }
    </style>

@endsection
@section('content')
    {{--pc轮播--}}
    <div id="carousel-example-generic" class="carousel slide my-slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a target="_blank" href="">
                    <img src="img/banner_1.jpg" alt="">
                </a>
            </div>
            <div class="item">
                <a target="_blank" href="">
                    <img src="img/banner_2.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
    {{--轮播结束--}}
    {{--手机封面--}}
    <div class="container" id="tellpnone_">
        <div class="card text-center">
            <div>
                <p>专注房产</p>
                <p><br>法律<br></p>
                <p>领域</p>
                <a href="#services" class="scrollto"><p><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></p></a>
            </div>
        </div>
    </div>
    {{--手机封面结束--}}
    {{--首页业务模块--}}
    <div class="container" id="services">
        <h1 class="headlines text-center"><span>专业领域</span></h1>
        <div class="col-sm-12 text-center">
            <h2>
                <small>每一份个案????????，每一位申请人都应该被认真对待。</small>
            </h2>
        </div>
            <div class="row">
                @foreach( $service as $k => $v )
                    <div class="col-xs-6 col-sm-4">
                        <a href="/services?rel_type_id={{$v['service_id']}}" class="col-sm-12 service-item shadow text-center">
                                <div class="col-sm-12 service-item-title">
                                    <h3>{{ $v->service_name }}</h3>
                                </div>
                                <div class="col-sm-12 service-item-describe">
                                    <p>{{ $v->topic }}</p>
                                </div>
                        </a>

                    </div>
                @endforeach
            </div>
    </div>
    <div class="container" id="news">
        <h1 class="headlines text-center"><span>行业新闻</span></h1>
        <div class="row">
            <ul class="col-sm-12">
                <li class="col-xs-12 col-sm-6">
                    <a href="http://www.zjacls.com/aboutus/show.php?itemid=127">明明未借到钱，怎就成了被告？</a>
                    <span>2017-10-24</span>
                    <p></p>
                </li>
                <li class="col-xs-12 col-sm-6">
                    <a href="http://www.zjacls.com/aboutus/show.php?itemid=127">明明未借到钱，怎就成了被告？</a>
                    <span>2017-10-24</span>
                    <p></p>
                </li>
                <li class="col-xs-12 col-sm-6">
                    <a href="http://www.zjacls.com/aboutus/show.php?itemid=127">明明未借到钱，怎就成了被告？</a>
                    <span>2017-10-24</span>
                    <p></p>
                </li>
                <li class="col-xs-12 col-sm-6">
                    <a href="http://www.zjacls.com/aboutus/show.php?itemid=127">明明未借到钱，怎就成了被告？</a>
                    <span>2017-10-24</span>
                    <p></p>
                </li>
            </ul>
            {{--<a href="http://www.zjacls.com/aboutus/list.php?catid=89" class="btn-white box-sh15">更多成功案例<i class="s-fa">&gt;&gt;</i></a>--}}
        </div>

    </div>
    {{--首页业务模块结束--}}
    {{--关于我们开始--}}
    <div class="container" id="about">
        <h1 class="headlines text-center"><span>关于我们</span></h1>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-6">
                    <address>
                        <h3>{{$company['company_name']}}</h3>
                        <p>地址：<span>{{$company['company_address']}}</span></p>
                        <p>手机：<span>{{$company['company_tell']}}</span></p>
                        <p>邮箱：<span>{{$company['company_email']}}</span></p>
                    </address>
                </div>
                <div class="col-sm-5 about-describe">
                    <address>
                        <p>{{$company['company_info']}}</p>
                    </address>

                </div>
            </div>
    </div>
@endsection





