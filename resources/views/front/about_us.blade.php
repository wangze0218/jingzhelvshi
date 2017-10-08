@extends('front.public.master')
@section('style')
    <style>
        #about p{
            font-size: 15px;
        }

        @media screen and (min-width: 768px) {
            #carousel-example-generic{
                width: 100%;
                height: 378px;
                overflow: hidden;
                margin-top: 80px;
            }
            #about {
                padding: 50px 0 145px 0;
                background-color: #ffffff;
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
        }
        @media (max-width: 767px) {
            #carousel-example-generic{
                display: none;
            }
            #about{
                text-align:center;
            }
            #about {
                padding: 155px 0 155px 0;
                background-color: #ffffff;
                color: #363636;
            }
            .about-describe{
                padding: 0px 39px;
            }
        }
    </style>
@endsection
@section('content')
    {{--pc轮播--}}
    <div id="carousel-example-generic" class="carousel slide my-slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a target="_blank" href="">
                    {{--<img src="http://www.clantrip.com/static/images/banner1.jpg" alt="美国签证代办" style="width: 1920px; max-width: 1920px; margin-left: 0px;">--}}
                    <img src="img/banner_10.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
    {{--轮播结束--}}
    <section id="about">
    <div class="container">
    <div class="title">
    <h1 class="text-center">联系我们</h1>
    <p style="margin:0 auto;width:80px;border-bottom: 2px solid #389bfa"></p>
    </div>
    <div class="row" style="padding: 20px 20px">
    <div class="col-sm-1"></div>
    <div class="col-sm-6">
    <address>
    <h3>京哲<span>房产 律师</span></h3>
    <p>地址：<span>北京大望路万达1号楼</span></p>
    <p>手机：<span>183-1031-7349</span></p>
    <p>邮箱：<span>xxxxxxxxxx@163.com</span></p>
    </address>
    </div>
    <div class="col-sm-5 about-describe">
    <address>
    <p>
    律师事务所秉承“镇所之宝”——“申明执法为民、房系百姓冷暖”的宗旨，在孙洪林主任的率领下，律师团队大显身手，承办了成百上千的房地产案件，捧回了百余面赞誉的锦旗，兑现了为百姓提供专业房地产法律服务的承诺。
    </p>
    </address>

    </div>
    </div>
    </div>
    </section>
@endsection





