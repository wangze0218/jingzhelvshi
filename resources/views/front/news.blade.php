@extends('front.public.master')
@section('style')
    <style>
        @media screen and (min-width: 768px) {
            .content{
                margin-top: 80px;
            }
            .news-list{
                margin-left:100px;
            }
            .news-list .our-news-item {
                margin: 0;
                border-bottom: 1px solid #c1c1c1;
            }

            .media:first-child {
                margin-top: 0;
            }
            .our-news-item {
                padding-top: 20px;
                padding-bottom: 20px;
            }
            .media, .media-body {
                zoom: 1;
                overflow: hidden;
            }
            .media-left, .media-right, .media-body {
                display: table-cell;
                vertical-align: top;
            }

            .media-left, .media>.pull-left {
                padding-right: 10px;
            }
            .our-news-item .media-left a {
                width: 140px;
                height: 110px;
                overflow: hidden;
                margin-bottom: 0;
            }

            a:visited {
                text-decoration: none;
            }
            .thumbnail {
                display: block;
                padding: 4px;
                margin-bottom: 20px;
                line-height: 1.42857143;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 4px;
                -webkit-transition: border .2s ease-in-out;
                -o-transition: border .2s ease-in-out;
                transition: border .2s ease-in-out;
            }
            .our-news-item .media-body {
                padding-top: 5px;
                padding-bottom: 5px;
            }

            .media-left, .media-right, .media-body {
                display: table-cell;
                vertical-align: top;
            }
            .media-body {
                width: 10000px;
            }

            a {
                color: #337ab7;
                text-decoration: none;
            }

            a {
                background-color: transparent;
            }
            .our-news-item .dynamic-li {
                color: #999;
                padding: 2px 0;
                font-size: 12px;
            }
            .our-news-item .dynamic-li b {
                float: right;
                font-weight: 400;
                width: 30px;
            }

            .our-news-item .dynamic-li .pic-glob {
                float: right;
                display: inline-block;
                width: 13px;
                height: 10px;
                background-position: -131px -58px;
                margin: 4px 5px 0 0;
                /*background-image: url(../images/icons/glob-pic.png);*/
                background-repeat: no-repeat;
            }
            .our-news-item .dynamic-li {
                color: #999;
                padding: 2px 0;
                font-size: 12px;
            }
            .our-news-item p {
                color: #919191;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                word-wrap: break-word;
                line-height: 1.5em;
                height: 3em;
                overflow: hidden;
                margin-bottom: 0;
                font-size: 12px;
            }

            p {
                margin: 0 0 10px;
            }
            .our-news-item .dynamic-li {
                color: #999;
                padding: 2px 0;
                font-size: 12px;
            }
            .our-news-item .dynamic-li a {
                float: right;
                display: inline-block;
                font-weight: 400;
                color: #999;
                margin-right: 10px;
            }
        }
        @media (max-width: 767px) {
            .content{
                margin-top: 52px;
            }
            #sidebar {
                display: none;
            }
            .news-list .our-news-item {
                margin: 0;
                border-bottom: 1px solid #c1c1c1;
            }

            .media:first-child {
                margin-top: 0;
            }
            .our-news-item {
                padding-top: 20px;
                padding-bottom: 20px;
            }
            .media-left, .media-right, .media-body {
                display: table-cell;
                vertical-align: top;
            }

            .media-left, .media>.pull-left {
                padding-right: 10px;
            }
            .our-news-item .media-left a {
                width: 140px;
                height: 110px;
                overflow: hidden;
                margin-bottom: 0;
            }

            a:visited {
                text-decoration: none;
            }
            .our-news-item img {
                object-fit: cover;
                width: 100%;
                height: 100px;
            }

            .thumbnail>img, .thumbnail a>img {
                margin-left: auto;
                margin-right: auto;
            }
            .our-news-item .media-body {
                padding-top: 5px;
                padding-bottom: 5px;
            }

            .media-left, .media-right, .media-body {
                display: table-cell;
                vertical-align: top;
            }
            .media-body {
                width: 10000px;
            }
            a {
                color: #337ab7;
                text-decoration: none;
            }

            a {
                background-color: transparent;
            }
            .our-news-item .dynamic-li {
                color: #999;
                padding: 2px 0;
                font-size: 12px;
            }

            .our-news-item .dynamic-li b {
                float: right;
                font-weight: 400;
                width: 30px;
            }
            .our-news-item .dynamic-li .pic-glob {
                float: right;
                display: inline-block;
                width: 13px;
                height: 10px;
                background-position: -131px -58px;
                margin: 4px 5px 0 0;
                background-image: url(../images/icons/glob-pic.png);
                background-repeat: no-repeat;
            }
            .our-news-item .dynamic-li {
                color: #999;
                padding: 2px 0;
                font-size: 12px;
            }

            .our-news-item p {
                color: #919191;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                word-wrap: break-word;
                line-height: 1.5em;
                height: 3em;
                overflow: hidden;
                margin-bottom: 0;
                font-size: 12px;
            }

            p {
                margin: 0 0 10px;
            }
            .our-news-item .dynamic-li {
                color: #999;
                padding: 2px 0;
                font-size: 12px;
            }
            .our-news-item .dynamic-li a {
                float: right;
                display: inline-block;
                font-weight: 400;
                color: #999;
                margin-right: 10px;
            }

        }
        .our-news-item h4 {
            color: #0ba1e4;
            height: 19px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            word-wrap: break-word;
        }
    </style>
@endsection
@section('content')
    <div class="container content">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb" style="margin-top: 10px; margin-bottom: 10px;">
                    <li><a href="">首页</a></li>
                    <li><a href="">律师行业新闻</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row main-container-row" style="position: relative">
                <div class="col-sm-3">
                    <div id="sidebar" style="position: relative; width: 213px;">
                        <div id="sidebar-content">
                            <ul>
                                <li>
                                    <a class="left-active" href="">新闻</a>
                                </li>

                                <li>
                                    <a href="">荣誉</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9 usinfo-article">
                    <div class="article-title">
                        <h1 class="h2">新闻
                            <small class="visible-xs">
                                <select name="" id="">
                                    <option value="">新闻</option>
                                    <option value="">荣誉</option>
                                </select>
                            </small>
                        </h1>
                    </div>
                    <div class="media our-news-item">
                        <div class="media-left">
                            <a class="thumbnail" href="">
                                <img class="media-object" src="http://www.clantrip.com/uploadfile/2017/0509/20170509103625563.jpg" alt="92名中国民工被欠薪受困塞班岛 华裔中介扣钱逃匿">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="">“申房律所”荣登诉讼十强榜</h4></a>
                            <div class="dynamic-li">
                                <b>0</b><em class="pic-glob"></em><span>时间：2017-05-09 </span>
                            </div>
                            <p>近日，由权威媒体在民商案件中抽取高诉讼标的的案件，再按照地域、法院、案件难易程度进行汇总分类排序，根据完全客观的大数据分析结果，生成了上海地区诉讼十强律所榜单，上海市申房律师事务所强势列入上海地区诉讼十强榜。
                            </p>
                            <div class="dynamic-li">
                                <a href="">[详细]</a>
                                <span>作者：申房律所 <span class="hidden-xs">clantrip.com</span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="media our-news-item">
                        <div class="media-left">
                            <a class="thumbnail" href="">
                                <img class="media-object" src="http://www.clantrip.com/uploadfile/2017/0509/20170509103625563.jpg" alt="92名中国民工被欠薪受困塞班岛 华裔中介扣钱逃匿">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="">“申房律所”荣登诉讼十强榜</h4></a>
                            <div class="dynamic-li">
                                <b>0</b><em class="pic-glob"></em><span>时间：2017-05-09 </span>
                            </div>
                            <p>近日，由权威媒体在民商案件中抽取高诉讼标的的案件，再按照地域、法院、案件难易程度进行汇总分类排序，根据完全客观的大数据分析结果，生成了上海地区诉讼十强律所榜单，上海市申房律师事务所强势列入上海地区诉讼十强榜。
                            </p>
                            <div class="dynamic-li">
                                <a href="">[详细]</a>
                                <span>作者：申房律所 <span class="hidden-xs">clantrip.com</span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="media our-news-item">
                        <div class="media-left">
                            <a class="thumbnail" href="">
                                <img class="media-object" src="http://www.clantrip.com/uploadfile/2017/0509/20170509103625563.jpg" alt="92名中国民工被欠薪受困塞班岛 华裔中介扣钱逃匿">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href=""><h4 class="media-heading">“申房律所”荣登诉讼十强榜</h4></a>
                            <div class="dynamic-li">
                                <b>0</b><em class="pic-glob"></em><span>时间：2017-05-09 </span>
                            </div>
                            <p>近日，由权威媒体在民商案件中抽取高诉讼标的的案件，再按照地域、法院、案件难易程度进行汇总分类排序，根据完全客观的大数据分析结果，生成了上海地区诉讼十强律所榜单，上海市申房律师事务所强势列入上海地区诉讼十强榜。
                            </p>
                            <div class="dynamic-li">
                                <a href="">[详细]</a>
                                <span>作者：申房律所 <span class="hidden-xs">clantrip.com</span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="article-footer">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li><a href="">«</a></li>
                                <li class="active"><span>1 <span class="sr-only">(current)</span></span></li>
                                <li><a href="">2</a></li>
                                <li><a href="">»</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
    </div>
@endsection





