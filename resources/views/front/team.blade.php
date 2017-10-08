@extends('front.public.master')
@section('style')
    <style>
        .team-item{
            margin-top: 20px;
            margin-left: -15px;
        }

        @media screen and (min-width: 768px) {
            .content{
                margin-top: 80px;
            }
            .team-img{
                width:80%;
            }
        }
        @media (max-width: 767px) {
            .content {
                margin-top: 52px;
            }
            .team-img{
                width:95%;
            }
            #sidebar {
                display: none;
            }
        }

    </style>
@endsection
@section('content')
    <div class="container content">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb" style="margin-top: 10px; margin-bottom: 10px;">
                    <li><a href="http://www.clantrip.com">首页</a></li>
                    <li><a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=lists&amp;catid=9">律师团队</a></li>			</ol>
            </div>
        </div>
    </div>
    <div class="main-container" style=" margin-bottom: 50px;">
        <div class="container">
            <div class="row main-container-row" style="position: relative">
                <div class="col-sm-3">
                    <div id="sidebar" style="position: relative; width: 213px;">
                        <div id="sidebar-content">
                            <ul>
                                <li>
                                    <a class="left-active" href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=lists&amp;catid=7">律师列表</a>
                                </li>

                                <li>
                                    <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=12&amp;id=4" title="签证费">助理列表</a>
                                </li>
                                <li>
                                    <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=12&amp;id=5" title="节假日及闭馆说明">特邀顾问</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9 usinfo-article">
                    <div class="article-title">
                        <h1 class="h2">律师列表
                            <small class="visible-xs">
                                <select name="" id="">
                                    <option value="">律师列表</option>
                                    <option value="">助理列表</option>
                                    <option value="">特邀顾问</option>
                                </select>
                            </small>
                        </h1>
                    </div>
                    <div class="col-xs-6 col-sm-6 team-item">
                        <img class="team-img" src="/img/pep.jpg" alt="">
                        <h4>律师XX</h4>
                        <p>T:152-100-19000</p>
                        <p>E:418888888@163.com</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 team-item">
                        <img class="team-img" src="/img/pep.jpg" alt="">
                        <h4>律师XX</h4>
                        <p>T:152-100-19000</p>
                        <p>E:418888888@163.com</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection





