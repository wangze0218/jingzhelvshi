@extends('front.public.master')
@section('style')
    <style>
        @media screen and (min-width: 768px) {
            .content{
                margin-top: 80px;
            }
        }
        @media (max-width: 767px) {
            .content {
                margin-top: 52px;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container content">
        <div class="row">
            <div class="col-sm-12">
                {!! $breadcrumb !!}
            </div>
        </div>
    </div>
    <div class="container-fluid about-us">
        <div class="container" style="width: 46%;margin-bottom: 100px">
            {{--<div class="row">--}}
                {{--<p class=" text-center">{{$articles->title}}</p>--}}
                {{--<p>{{$articles->title_describe}}</p>--}}
            {{--</div>--}}
            <div class="row">
                {!! $article !!}
            </div>
        </div>
    </div>
@endsection