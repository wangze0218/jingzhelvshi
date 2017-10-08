<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>京哲律师</title>
    @include('front.public.style')
    @yield('style')
    @include('front.public.script')
    <style>
        html,body{
            height:100%;
        }
        .shadow{
            vertical-align: middle;
            border: 1px solid white;
            box-shadow: 0 6px 30px -10px rgba(0, 0, 0, .6)!important;
        }
        .text-indent{
            text-indent:2em;
        }
        .breadcrumb{
            padding: 8px 15px;
            margin-bottom: 20px;
            list-style: none;
            background-color: #f5f5f5;
            border-radius: 4px;
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
        .article-title {
            border-bottom: 1px solid #c1c1c1;
        }
        .article-title h1 small {
            float: right;
            margin-top: 3px;
            font-size: 14px;
        }

        #left-line {
            display: block;
            position: absolute;
            top: 0;
            left: 25%;
            height: 100%;
            border-left: 1px solid #c1c1c1;
        }
        .line{
            border-top: 1px solid #949494;
            padding-bottom:30px ;
        }
    </style>
</head>
<body>
    @include('front.public.header')
    @yield('content')
    @include('front.public.footer')
    @yield('script')
</body>
</html>