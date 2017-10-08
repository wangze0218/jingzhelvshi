@extends('front.public.master')
@section('style')
    <style>
        .article-content h3:first-child {
            border-top-style: none;
        }
        .article-content h3 {
            margin: 0;
            color: #0ba1e4;
            border-top: 1px solid #c1c1c1;
            line-height: 1.5em;
            padding-top: 15px;
            padding-bottom: 15px;
        }
        @media screen and (min-width: 768px) {
            .content{
                margin-top: 80px;
            }
        }
        @media (max-width: 767px) {
            .content{
                margin-top: 52px;
            }

            #sidebar {
                display: none;
            }
            .article-content p {
                line-height: 2em;
                font-weight: 400;
                margin-top: 10px;
                margin-bottom: 10px;
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
                    <li><a class="active" href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=lists&amp;catid=6">专业领域</a></li>
                </ol>
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
                                    <a class="left-active" href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=lists&amp;catid=7">商品房屋买卖纠纷</a>
                                    {{--<ul>--}}
                                        {{--<li><a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=7&amp;id=1" title="签证类型概述">概述</a></li>--}}
                                        {{--<li><a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=7&amp;id=1" title="签证类型概述">未经家人同意、经济困难就可以不履行买卖合同吗？</a></li>--}}
                                    {{--</ul>--}}
                                </li>

                                <li>
                                    <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=12&amp;id=4" title="签证费">二手房屋买卖纠纷</a>
                                </li>
                                <li>
                                    <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=12&amp;id=5" title="节假日及闭馆说明">房产继承纠纷</a>
                                </li>
                                <li>
                                    <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=12&amp;id=36" title="护照追踪与检索">期房买卖纠纷</a>
                                </li>
                                <li>
                                    <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=12&amp;id=6" title="照片和指纹">租赁合同纠纷</a>
                                </li>
                                <li>
                                    <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=12&amp;id=7" title="申请免面谈">婚姻共有房产分割</a>
                                </li>
                                <li>
                                    <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=12&amp;id=8" title="须进一步审理的申请">居民合同纠纷</a>
                                </li>
                                <li>
                                    <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=12&amp;id=9" title="提交221(G)文件">房屋买卖纠纷</a>
                                </li>
                                <li>
                                    <a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=12&amp;id=10" title="儿童签证">物业合同纠纷</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9 usinfo-article">
                    <div class="article-title">
                        <h1 class="h2">商品房合同纠纷
                            <small class="visible-xs">
                                <select name="" id="">
                                    <option value="">商品房合同纠纷</option>
                                    <option value="">二手房屋买卖纠纷</option>
                                    <option value="">房产继承纠纷</option>
                                    <option value="">期房买卖纠纷</option>
                                    <option value="">租赁合同纠纷</option>
                                    <option value="">婚姻共有房产分割</option>
                                    <option value="">居民合同纠纷</option>
                                    <option value="">房屋买卖纠纷</option>
                                    <option value="">物业合同纠纷</option>
                                </select>
                            </small>
                        </h1>
                    </div>
                    <div class="article-content">
                        <h3>概述</h3>
                        <p>商品房合同纠纷</p>

                        <p class="text-indent">
                            商品房买卖合同是指房地产开发企业将尚未建成或者已竣工的房屋向社会销售并转移房屋所有权于买受人，买受人支付价款的合同。这里的房屋特指商品房，而不包括农村自建住房、单位集资建房等。通常情况下，商品房买卖合同的主要内容包括当事人、标的物及其数量和质量、付款、履行期限、履行方式、违约责任等。商品房合同纠纷主要来源于商品房合同条款自身的缺陷或因不可抗力等因素引起的合同履行迟延或履行不能等而产生的纠纷。包括因预售商品房的交房时间、面积、质量、价款、产权证明等方面的纠纷。
                        </p>
                        <p class="text-indent">
                            近年来，上海市申房律师事务所汇聚了大批精通国内外法律法规政策、熟悉土地、房地产、金融等法律事务的优秀律师。在法律业务领域几乎涵盖了中国地产法律事务的所有方面，拥有一大批房地产领域法律实践经验丰富的专家级资深律师，在商品房合同纠纷领域拥有大量的成功案例，在业界赫赫有名，成功代理了大量疑难复杂案例，积累了丰富的实务经验。
                        </p>

                        <h3>主要服务领域包括：</h3>

                        <p>■商品房逾期交付纠纷</p>

                        <p>■商品房相关资质隐瞒纠纷</p>

                        <p>■商品房权属证书缺失纠纷</p>

                        <p>■商品房质量瑕疵纠纷</p>

                        <p>■商品房宣传广告虚假纠纷</p>

                        <h3>案例</h3>
                        <table class="table table-bordered table-hover">

                            <thead>
                            <tr>
                                <th>相关案例</th>
                                <th>日期</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="">[商品房买卖合同纠纷] 案件精析 | 未经家人同意、经济困难就可以不履行买卖合同吗？</a></td>
                                <td>2017-06-29</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





