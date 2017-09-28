@extends('front.public.master')
@section('style')
    <style>
        @media screen and (min-width: 768px) {
            #carousel-example-generic{
                width: 100%;
                height: 540px;
                overflow: hidden;
                margin-top: 82px;
            }
            #carousel-example-generic img{
                /*width: 100%;*/

            }
            #tellpnone_{
                display: none;
            }

        }
        @media (max-width: 767px) {
            #carousel-example-generic{
                display: none;
            }
            #tellpnone_{
                width: 100%;
                height: 100%;
                overflow: hidden;
                margin-top: 50px;
                background:url('/img/slide-1.jpg') center top ;
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
                margin-top: -110px;
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
                    {{--<img src="http://www.clantrip.com/static/images/banner1.jpg" alt="美国签证代办" style="width: 1920px; max-width: 1920px; margin-left: 0px;">--}}
                    <img src="img/slide-1.jpg" alt="美国签证代办" style="width: 1920px; max-width: 1920px; margin-left: 0px;">
                </a>
            </div>
            <div class="item">
                <a target="_blank" href="">
                    {{--<img src="http://www.clantrip.com/static/images/banner2.jpg" alt="美国签证加急预约" style="width: 1920px; max-width: 1920px; margin-left: 0px;">--}}
                    <img src="img/slide-2.jpg" alt="美国签证加急预约" style="width: 1920px; max-width: 1920px; margin-left: 0px;">
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
@endsection





