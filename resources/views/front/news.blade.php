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
        @media (max-width: 767px) {
            .content{
                padding-top: 52px;
            }
            .breadcrumb {
                padding: 8px 15px;
                margin-bottom: 20px;
                list-style: none;
                background-color: #f5f5f5;
                border-radius: 4px;
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
                    <li><a href="http://www.clantrip.com">首页</a></li>
                    <li><a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=lists&amp;catid=9">律师团队</a></li>			</ol>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row main-container-row" style="position: relative">
                <div class="col-xs-12 col-sm-9 news-list">
                    <div class="media our-news-item">
                        <div class="media-left">
                            <a class="thumbnail" href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=49">
                                <img class="media-object" src="http://www.clantrip.com/uploadfile/2017/0509/20170509103625563.jpg" alt="92名中国民工被欠薪受困塞班岛 华裔中介扣钱逃匿">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=49"><h4 class="media-heading">92名中国民工被欠薪受困塞班岛 华裔中介扣钱逃匿</h4></a>
                            <div class="dynamic-li">
                                <b>0</b><em class="pic-glob"></em><span>时间：2017-05-09 </span>
                            </div>
                            <p>他们大部分来自东北，在去年10月份时，其所在城市的劳务中介公司找到他们，介绍了塞班岛的工作，中介给他们开出每天工作8小时日薪300元、如果加班每小时50元的待遇。民工称他们当时也没</p>
                            <div class="dynamic-li">
                                <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=49">[详细]</a>
                                <span>作者：中岚签证 <span class="hidden-xs">clantrip.com</span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="media our-news-item">
                        <div class="media-left">
                            <a class="thumbnail" href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=48">
                                <img class="media-object" src="http://www.clantrip.com/uploadfile/2017/0508/20170508061916221.png" alt="2017年赴美签证新规定">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=48"><h4 class="media-heading">2017年赴美签证新规定</h4></a>
                            <div class="dynamic-li">
                                <b>0</b><em class="pic-glob"></em><span>时间：2017-05-08 </span>
                            </div>
                            <p>美国国务院领事事务局2016年10月6日公告，自2016年11月1日开始，申请美国护照或签证，要使用没有戴眼镜的照片。</p>
                            <div class="dynamic-li">
                                <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=48">[详细]</a>
                                <span>作者：中岚签证 <span class="hidden-xs">clantrip.com</span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="media our-news-item">
                        <div class="media-left">
                            <a class="thumbnail" href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=47">
                                <img class="media-object" src="http://www.clantrip.com/uploadfile/2017/0508/20170508052848613.jpg" alt="美国有多少人缴纳个人所得税及其它">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=47"><h4 class="media-heading">美国有多少人缴纳个人所得税及其它</h4></a>
                            <div class="dynamic-li">
                                <b>0</b><em class="pic-glob"></em><span>时间：2017-05-08 </span>
                            </div>
                            <p>前几天我们有一篇博文介绍了美国个人所得税税率，不少网友提出许多有关美国个税税收的问题，这里就集中回答。由于个税牵涉到联邦所得税以及   </p>
                            <div class="dynamic-li">
                                <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=47">[详细]</a>
                                <span>作者：中岚签证 <span class="hidden-xs">clantrip.com</span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="media our-news-item">
                        <div class="media-left">
                            <a class="thumbnail" href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=35">
                                <img class="media-object" src="http://www.clantrip.com/uploadfile/2017/0414/20170414112021996.jpg" alt="多国签证利好频出，带火春节出境游">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=35"><h4 class="media-heading">多国签证利好频出，带火春节出境游</h4></a>
                            <div class="dynamic-li">
                                <b>0</b><em class="pic-glob"></em><span>时间：2017-04-15 </span>
                            </div>
                            <p>近一两个月来，澳大利亚、马来西亚、以色列、阿联酋、塞尔维亚、泰国等国纷纷对中国公民捧出签证利好，加上春节临近，大为提振了南京市民的旅游热情。记者从旅游市场上获悉，春节期间</p>
                            <div class="dynamic-li">
                                <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=35">[详细]</a>
                                <span>作者：中岚签证 <span class="hidden-xs">clantrip.com</span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="media our-news-item">
                        <div class="media-left">
                            <a class="thumbnail" href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=34">
                                <img class="media-object" src="http://www.clantrip.com/uploadfile/2017/0414/20170414112021996.jpg" alt="多国签证利好频出，带火春节出境游">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=34"><h4 class="media-heading">多国签证利好频出，带火春节出境游</h4></a>
                            <div class="dynamic-li">
                                <b>0</b><em class="pic-glob"></em><span>时间：2017-04-15 </span>
                            </div>
                            <p>近一两个月来，澳大利亚、马来西亚、以色列、阿联酋、塞尔维亚、泰国等国纷纷对中国公民捧出签证利好，加上春节临近，大为提振了南京市民的旅游热情。记者从旅游市场上获悉，春节期间</p>
                            <div class="dynamic-li">
                                <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=34">[详细]</a>
                                <span>作者：中岚签证 <span class="hidden-xs">clantrip.com</span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="media our-news-item">
                        <div class="media-left">
                            <a class="thumbnail" href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=33">
                                <img class="media-object" src="http://www.clantrip.com/uploadfile/2017/0414/20170414112021996.jpg" alt="多国签证利好频出，带火春节出境游">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=33"><h4 class="media-heading">多国签证利好频出，带火春节出境游</h4></a>
                            <div class="dynamic-li">
                                <b>0</b><em class="pic-glob"></em><span>时间：2017-04-15 </span>
                            </div>
                            <p>近一两个月来，澳大利亚、马来西亚、以色列、阿联酋、塞尔维亚、泰国等国纷纷对中国公民捧出签证利好，加上春节临近，大为提振了南京市民的旅游热情。记者从旅游市场上获悉，春节期间</p>
                            <div class="dynamic-li">
                                <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=33">[详细]</a>
                                <span>作者：中岚签证 <span class="hidden-xs">clantrip.com</span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="media our-news-item">
                        <div class="media-left">
                            <a class="thumbnail" href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=32">
                                <img class="media-object" src="http://www.clantrip.com/uploadfile/2017/0414/20170414112021996.jpg" alt="多国签证利好频出，带火春节出境游">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=32"><h4 class="media-heading">多国签证利好频出，带火春节出境游</h4></a>
                            <div class="dynamic-li">
                                <b>0</b><em class="pic-glob"></em><span>时间：2017-04-15 </span>
                            </div>
                            <p>近一两个月来，澳大利亚、马来西亚、以色列、阿联酋、塞尔维亚、泰国等国纷纷对中国公民捧出签证利好，加上春节临近，大为提振了南京市民的旅游热情。记者从旅游市场上获悉，春节期间</p>
                            <div class="dynamic-li">
                                <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=32">[详细]</a>
                                <span>作者：中岚签证 <span class="hidden-xs">clantrip.com</span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="media our-news-item">
                        <div class="media-left">
                            <a class="thumbnail" href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=31">
                                <img class="media-object" src="http://www.clantrip.com/uploadfile/2017/0414/20170414112021996.jpg" alt="多国签证利好频出，带火春节出境游">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=31"><h4 class="media-heading">多国签证利好频出，带火春节出境游</h4></a>
                            <div class="dynamic-li">
                                <b>0</b><em class="pic-glob"></em><span>时间：2017-04-15 </span>
                            </div>
                            <p>近一两个月来，澳大利亚、马来西亚、以色列、阿联酋、塞尔维亚、泰国等国纷纷对中国公民捧出签证利好，加上春节临近，大为提振了南京市民的旅游热情。记者从旅游市场上获悉，春节期间</p>
                            <div class="dynamic-li">
                                <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=31">[详细]</a>
                                <span>作者：中岚签证 <span class="hidden-xs">clantrip.com</span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="media our-news-item">
                        <div class="media-left">
                            <a class="thumbnail" href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=30">
                                <img class="media-object" src="http://www.clantrip.com/uploadfile/2017/0414/20170414112021996.jpg" alt="多国签证利好频出，带火春节出境游">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=30"><h4 class="media-heading">多国签证利好频出，带火春节出境游</h4></a>
                            <div class="dynamic-li">
                                <b>0</b><em class="pic-glob"></em><span>时间：2017-04-15 </span>
                            </div>
                            <p>近一两个月来，澳大利亚、马来西亚、以色列、阿联酋、塞尔维亚、泰国等国纷纷对中国公民捧出签证利好，加上春节临近，大为提振了南京市民的旅游热情。记者从旅游市场上获悉，春节期间</p>
                            <div class="dynamic-li">
                                <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=30">[详细]</a>
                                <span>作者：中岚签证 <span class="hidden-xs">clantrip.com</span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="media our-news-item">
                        <div class="media-left">
                            <a class="thumbnail" href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=29">
                                <img class="media-object" src="http://www.clantrip.com/uploadfile/2017/0414/20170414112021996.jpg" alt="多国签证利好频出，带火春节出境游">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=29"><h4 class="media-heading">多国签证利好频出，带火春节出境游</h4></a>
                            <div class="dynamic-li">
                                <b>0</b><em class="pic-glob"></em><span>时间：2017-04-15 </span>
                            </div>
                            <p>近一两个月来，澳大利亚、马来西亚、以色列、阿联酋、塞尔维亚、泰国等国纷纷对中国公民捧出签证利好，加上春节临近，大为提振了南京市民的旅游热情。记者从旅游市场上获悉，春节期间</p>
                            <div class="dynamic-li">
                                <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=10&amp;id=29">[详细]</a>
                                <span>作者：中岚签证 <span class="hidden-xs">clantrip.com</span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="article-footer">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li><a href="index.php?m=content&amp;c=index&amp;a=lists&amp;catid=10">«</a></li> <li class="active"><span>1 <span class="sr-only">(current)</span></span></li> <li><a href="index.php?m=content&amp;c=index&amp;a=lists&amp;catid=10&amp;page=2">2</a></li> <li><a href="index.php?m=content&amp;c=index&amp;a=lists&amp;catid=10&amp;page=2">»</a></li>						</ul>
                        </nav>
                    </div>
                </div>
        </div>
    </div>
@endsection





