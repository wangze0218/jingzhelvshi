@extends('front.public.master')
@section('style')
    <style>
        @media screen and (min-width: 768px) {
            .content{
                margin-top: 80px;
            }
            #sidebar {
                overflow: hidden;
            }
            #sidebar-content {
                width: 115%;
                height: 100% !important;
                overflow-y: scroll;
            }
            #sidebar-content ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }
            #sidebar-content ul li {
                padding-left: 1em;
            }
            #sidebar-content>ul>li>a {
                color: #0ba1e4;
            }
            #sidebar-content .left-active {
                background-color: rgba(194,214,229,.6);
                color: #0ba1e4;
            }
            #sidebar-content ul li a {
                display: block;
                width: 100%;
                padding-left: 1em;
                line-height: 28px;
                height: 28px;
                color: #616161;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;
                word-wrap: break-word;
            }


            #left-line {
                display: block;
                position: absolute;
                top: 0;
                left: 25%;
                height: 100%;
                border-left: 1px solid #c1c1c1;
            }
            .article-title {
                border-bottom: 1px solid #c1c1c1;
            }
            .article-title h1 {
                display: block;
                margin: 0 0 10px 0;
                line-height: 1.5em;
            }
            .article-content h3:first-child {
                border-top-style: none;
            }
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
        }
        @media (max-width: 767px) {
            .content{

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
                                    <ul>
                                        <li><a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=7&amp;id=1" title="签证类型概述">概述</a></li>
                                        <li><a href="http://www.clantrip.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=7&amp;id=1" title="签证类型概述">未经家人同意、经济困难就可以不履行买卖合同吗？</a></li>
                                    </ul>
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
                        <h1 class="h2">签证类型概述<small class="hidden-xs">United States</small></h1>
                    </div>
                    <div class="article-content">
                        <h3>概述</h3>
                        <p>一般来说，想要入境美国的外国公民必须首先获得签证，其中非移民签证用于临时居留，而移民签证用于永久居住。符合豁免签证计划的国家公民可免签入境，但在去美国之前须通过旅游授权电子系统(ESTA)获得授权。</p>
                        <p>如不符合豁免签证计划，或以学习、工作、参加交流项目或其他不属于B类签证的目的为由出行美国，则需申请非移民签证。</p>
                        <p>签证并非入境美国的保障。它仅表明美国签证官确认您有资格因特定目的申请入境。</p>
                        <h3>非移民签证</h3>
                        <p>非移民签证适用于以特定目的为由要在美国停留一段时间的游客、商务人士、学生或专业工作者。根据美国签证法律法规的要求，大部分非移民签证申请人须向签证官证明，其在自己国家具有牢固约束力，并且在短期停留后会离开美国。</p>
                        <h3>签证类型列表</h3>
                        <p>美国是一个开放民主、文明安全的社会，欢迎大家前来旅游观光。大多数加拿大公民和豁免签证计划适用国公民如符合特定条件，均可免签入境。</p>
                        <p>如果您并非美国公民或美国合法永久居民，可通过申请各类非移民签证短期赴美。根据美国移民法的要求，所需签证类型将由申请人的预期旅行目的及其他因素决定。申请人有必要了解非移民签证类型，以及在美国驻外使馆或总领事馆申请签证的步骤。</p>
                        <table class="table table-bordered table-hover">
                            <caption>
                                非移民签证类型列表</caption>
                            <thead>
                            <tr>
                                <th>
                                    前往美国的目的和非移民签证类型</th>
                                <th>
                                    签证类型</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>业余运动员和职业运动员（以赢取奖金为唯一目标） B-1</td>
                                <td>B-1</td>
                            </tr>
                            <tr>
                                <td>运动员、艺术家、演艺人员</td>
                                <td>P</td>
                            </tr>
                            <tr>
                                <td>澳大利亚工作者 - 专业人士</td>
                                <td>BCC</td>
                            </tr>
                            <tr>
                                <td>过境卡： 墨西哥</td>
                                <td>Content Cell</td>
                            </tr>
                            <tr>
                                <td>商务访客</td>
                                <td>B-1</td>
                            </tr>
                            <tr>
                                <td>乘务组成员（船舶或国际航班乘务人员）</td>
                                <td>D</td>
                            </tr>
                            <tr>
                                <td>外交官和外国政府公职人员</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>家庭雇员或保姆（必须陪同外国雇主）</td>
                                <td>B-1</td>
                            </tr>
                            <tr>
                                <td>指定国际组织以及北大西洋公约组织(NATO)雇员</td>
                                <td>G1-G5，NATO</td>
                            </tr>
                            <tr>
                                <td>交流访问学者</td>
                                <td>J</td>
                            </tr>
                            <tr>
                                <td>交流访问学者 - 互惠生</td>
                                <td>J-1</td>
                            </tr>
                            <tr>
                                <td>交流访问学者 - J-1签证持有人的子女（21岁以下）或配偶</td>
                                <td>J-2</td>
                            </tr>
                            <tr>
                                <td>交流访问学者 - 教授、学者、老师</td>
                                <td>J-1</td>
                            </tr>
                            <tr>
                                <td>交流访问学者 - 国际文化事业</td>
                                <td>J，Q</td>
                            </tr>
                            <tr>
                                <td>未婚夫（妻）</td>
                                <td>K-1</td>
                            </tr>
                            <tr>
                                <td>驻美外国军事人员</td>
                                <td>A-2，NATO1-6</td>
                            </tr>
                            <tr>
                                <td>在科学、艺术、教育、商业或体育领域有杰出才能的外国公民</td>
                                <td>O-1</td>
                            </tr>
                            <tr>
                                <td>自由贸易协定(FTA)专业人士： 智利</td>
                                <td>H-1B1</td>
                            </tr>
                            <tr>
                                <td>自由贸易协定(FTA)专业人士： 新加坡</td>
                                <td>H-1B1</td>
                            </tr>
                            <tr>
                                <td>新闻媒体工作者（媒体、记者）</td>
                                <td>I</td>
                            </tr>
                            <tr>
                                <td>公司内部调职者</td>
                                <td>L</td>
                            </tr>
                            <tr>
                                <td>寻求医疗服务的人士</td>
                                <td>B-2</td>
                            </tr>
                            <tr>
                                <td>北美自由贸易协定(NAFTA)专业人士： 墨西哥、加拿大</td>
                                <td>TN/TD</td>
                            </tr>
                            <tr>
                                <td>前往缺乏医疗人才的地区从事护理工作的人士</td>
                                <td>H-1C</td>
                            </tr>
                            <tr>
                                <td>医师</td>
                                <td>J-1，H-1B</td>
                            </tr>
                            <tr>
                                <td>宗教工作者</td>
                                <td>R</td>
                            </tr>
                            <tr>
                                <td>从事特定技能领域的专业人士</td>
                                <td>H-1B</td>
                            </tr>
                            <tr>
                                <td>学生 - 就读学术机构和语言学校的学生</td>
                                <td>F-1</td>
                            </tr>
                            <tr>
                                <td>学生亲属 - F-1签证持有人的亲属</td>
                                <td>F-2</td>
                            </tr>
                            <tr>
                                <td>学生 – 职业教育</td>
                                <td>M-1</td>
                            </tr>
                            <tr>
                                <td>学生亲属 - M-1签证持有人的亲属</td>
                                <td>M-2</td>
                            </tr>
                            <tr>
                                <td>短期工作者 - 季节性农业</td>
                                <td>H-2A</td>
                            </tr>
                            <tr>
                                <td>短期工作者 – 非农业</td>
                                <td>H-2B</td>
                            </tr>
                            <tr>
                                <td>旅游、度假、观光客</td>
                                <td>B-2</td>
                            </tr>
                            <tr>
                                <td>参加非就业性质的项目培训</td>
                                <td>H-3</td>
                            </tr>
                            <tr>
                                <td>北马里亚纳群岛联邦的过渡工作者</td>
                                <td>CW</td>
                            </tr>
                            <tr>
                                <td>条约投资者</td>
                                <td>E-2</td>
                            </tr>
                            <tr>
                                <td>条约交易者</td>
                                <td>E-1</td>
                            </tr>
                            <tr>
                                <td>过境</td>
                                <td>C</td>
                            </tr>
                            <tr>
                                <td>人口贩卖受害者</td>
                                <td>T-1</td>
                            </tr>
                            <tr>
                                <td>在美国签证续签 - A类、G类和NATO类</td>
                                <td>A1-2，G1-4，NATO1-6</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <p class="hidden-xs" id="left-line"></p>
            </div>
        </div>
    </div>
@endsection





