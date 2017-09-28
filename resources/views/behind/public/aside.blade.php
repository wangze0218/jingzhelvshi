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
            <li>
                <a @if(\Request::path() == 'behind/article')class="active"@endif href="/behind/article" >
                    <i class="icon-user"></i>
                    <span>文章管理</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
