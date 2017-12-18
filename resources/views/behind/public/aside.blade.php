<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a @if(\Request::path() == 'behind')class="active"@endif href="/behind">
                    <i class="icon-dashboard"></i>
                    <span>首页</span>
                </a>
            </li>
            <li>
                <a @if(\Request::path() == 'behind/user')class="active"@endif href="/behind/user" >
                    <i class="icon-user"></i>
                    <span>用户管理</span>
                </a>
            </li>
            <li class="sub-menu">
                <a @if(\Request::path() == 'behind/service')class="active"@endif  href="javascript:;">
                    <i class="icon-laptop"></i>
                    <span>业务管理</span>
                </a>
                <ul class="sub">
                    <li><a  href="/behind/service">业务类别管理</a></li>
                    <li><a  href="/behind/service_article">业务内容管理</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a @if(\Request::path() == 'behind/team')class="active"@endif  href="javascript:;">
                    <i class="icon-laptop"></i>
                    <span>团队管理</span>
                </a>
                <ul class="sub">
                    <li><a  href="/behind/team">团队类别管理</a></li>
                    <li><a  href="/behind/team_article">团队内容管理</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a @if(\Request::path() == 'behind/news')class="active"@endif  href="javascript:;">
                    <i class="icon-laptop"></i>
                    <span>新闻管理</span>
                </a>
                <ul class="sub">
                    <li><a  href="/behind/news">新闻类别管理</a></li>
                    <li><a  href="/behind/news_article">新闻内容管理</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a @if(\Request::path() == 'behind/cases')class="active"@endif  href="javascript:;">
                    <i class="icon-laptop"></i>
                    <span>案例管理</span>
                </a>
                <ul class="sub">
                    <li><a  href="/behind/cases">案例类别管理</a></li>
                    <li><a  href="/behind/cases_article">案例内容管理</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a @if(\Request::path() == 'behind/company')class="active"@endif href="/behind/company" >
                    <i class="icon-laptop"></i>
                    <span>公司信息管理</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
