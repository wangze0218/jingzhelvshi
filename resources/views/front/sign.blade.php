<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>华云数海</title>
    @include('front.public.style')
    <style>
        .container{
            width:300px ;
        }
        .sing_bg{
            margin-left: -30px;
            margin-top: 60px;
            margin-bottom: 30px;
        }
        .sign_input{
            box-shadow: none;
            transition: all .4s;
            padding: 5px;
            padding-left: 30px;
            color: #8D8D8D;
            background-color: #FFF;
            border-radius: 0 !important;
        }
        .i:before{
            font-size: 10px;
            color: #ccc;
            position: absolute;
            margin: 13px 2px 4px 10px;
            z-index: 3;
            width: 16px;
            height: 16px;
            text-align: center;
        }
        #remember_span{
            padding: 0px 8px;
            border: 1px solid #e7e7e7;
            position: relative;
            margin-right: 5px;
        }
        input:checked + #remember_span:after{
            content: "\002713";
            color: #139DDC;
            width: 80%;
            height: 80%;
            top: -14%;
            left: 10%;
            position: absolute;
            border-radius: 50%;
            display: block;
            font-size: 16px;
        }
        .check-cont{
            color: #828282;
            font-weight: unset;
            font-family: Roboto-Light;
            font-size: 13px;
            margin: 20px 0px;

        }
        #sing_in button{
            width: 100%;
            margin-bottom: 30px;
        }
        .form-group{
            margin: 0px 0px;
        }
    </style>
    @include('front.public.script')
</head>
<body>
<section id="console_login">
    <div class="container-fluid">
        <div class="container">
                <div class="row sing_bg text-center">
                    <a href="#">
                        <img src="https://console.zaarapp.com/assets/images/Logo.png" alt="logo">
                    </a>
                </div>
                <div class="row">
                    <form class="sing_in_form" id="sing_in" action="/sign_in" method="post" autocomplete="off" novalidate="novalidate">
                        <input name="_token" type="hidden" value="{{csrf_token()}}">
                        <div class="form-group">
                                <span class="glyphicon glyphicon-user i" aria-hidden="true"></span>
                                <input class="form-control sign_input" type="email" autofocus="" value="" autocomplete="off" placeholder="用户名称" name="identity">
                        </div>
                        <div class="form-group">
                                <span class="glyphicon glyphicon-lock i" aria-hidden="true"></span>
                                <input class="form-control sign_input" type="password" maxlength="32" autocomplete="off" placeholder="用户密码" name="password" id="password">
                        </div>
                        <div class="form-group">
                            <label for="remember" class="check-cont">
                                <input id="remember" name="remmber" class="hidden" type="checkbox">
                                <span id="remember_span"></span>
                                Remember me
                            </label>

                        </div>
                        <div class="form-group">
                            <button class="btn btn-info">Login</button>
                        </div>
                    </form>
                </div>
                <div class="row form-group text-center">
                    Copyright © 2017  <a href="http://www.zaarapp.com/"> ZAAR Technologies</a>
                </div>
            </div>
        </div>
</section>




</body>
</html>









