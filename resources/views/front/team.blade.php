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
                    <li><a href="">首页</a></li>
                    <li><a href="">律师团队</a></li>			</ol>
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
                                        <a @if($v['team_id'] == $own['team_id']) class="left-active" @endif  href="/team?rel_type_id={{$v['team_id']}}">{{$v['team_name']}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9 usinfo-article">
                    <div class="article-title">
                        <h1 class="h2">{{ $own['team_name'] }}
                            <small class="visible-xs">
                                <select name="" id="select">
                                    @foreach( $article_all_type as $k => $v )
                                        <option @if($v['team_id'] == $own['team_id']) selected @endif value="/team?rel_type_id={{$v['team_id']}}">{{$v['team_name']}}</option>
                                    @endforeach
                                </select>
                            </small>
                        </h1>
                    </div>
                    @foreach( $list['data'] as $k => $v)
                        <div class="col-xs-6 col-sm-6 team-item">
                            <img class="team-img" src="{{ $v['title_img'] }}" alt="">
                            <h4>{{ $v['title'] }}</h4>
                            <p> {{ $v['title_describe'] }} </p>
                            <p> {{ $v['vice_title_describe'] }} </p>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>


@endsection





