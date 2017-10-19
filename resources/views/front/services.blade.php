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
                    <li><a href="">首页</a></li>
                    <li><a class="active" href="">专业领域</a></li>
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
                                @foreach( $article_all_type as $k => $v )
                                    <li>
                                        <a @if($v['service_id'] == $service['service_id']) class="left-active" @endif  href="/services?rel_type_id={{$v['service_id']}}">{{$v['service_name']}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9 usinfo-article">
                    <div class="article-title">
                        <h1 class="h2">{{ $service['service_name'] }}
                            <small class="visible-xs">
                                <select name="" id="">
                                    @foreach( $article_all_type as $k => $v )
                                        <option value="{{$v['service_id']}}">{{$v['service_name']}}</option>
                                    @endforeach
                                </select>
                            </small>
                        </h1>
                    </div>
                    <div class="article-content">
                        <h3>概述</h3>
                        <p>{{ $service['service_name'] }}</p>

                        @foreach( $service['summary'] as $k => $v)
                            <p class="text-indent">
                                {{$v}}
                            </p>
                        @endforeach
                        <h3>主要服务领域包括：</h3>
                        @foreach( $service['service_areas'] as $k => $v)
                            <p>
                                {{$v}}
                            </p>
                        @endforeach

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
                                @foreach( $list['data'] as $k => $v)
                                    <td><a href="/services/page/{{$v['article_id']}}"> {{ $v['title'] }} </a></td>
                                    <td>{{ $v['created_at'] }}</td>
                                @endforeach
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection





