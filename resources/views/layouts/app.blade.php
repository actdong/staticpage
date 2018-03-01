<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/img/logo.ico" rel="shortcut icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title></title>-->
    <title>@yield('title',"小学帮")</title>



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        /* #logo {
            width: auto;
            height: 133%;
        } */

        #shoptop {
          background-image: url('/img/logo.gif') ;
          background-repeat:no-repeat;
          background-position:2.05% 0%;
        }

       #shop_home_page_link {
         text-indent: 1.5em;
         opacity: 0;
         /* overflow: hidden; */
       }

       #vaptchaContainer{
           height: 46px;
           display: none;
       }



    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container" id="shoptop">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a id="shop_home_page_link" class="navbar-brand" href="{{ url('/') }}">
                        <!-- {{ config('app.name', 'Laravel') }} -->
                        小学帮默认主页
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">登录</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            注销
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        @include('shared._messages')
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
          window.onload=function()
          {
              $('[data-toggle="popover"]').popover();
              var o = document.getElementById("bangform");
              if (o) {
                setTimeout(function (){document.getElementById("bangform").submit();},4800);
              }
          }
    </script>
    <script src="https://cdn.vaptcha.com/v.js"></script>
    <script>
        var exist = document.getElementById("vaptchaContainer");
        if ( !exist ) {
         //exit();
       } else {
         var form = {
             token: '',
             challenge: '',
             phone: '',
             password: ''
         }
         // $.get('/server/auth.php/getVaptcha', function (r) {
         $.get('{{ route('init_vap') }}',{ sceneId: "01" }, function (r) {
             var options = {
                 vid: r.vid,//站点id ,string,必选,
                 challenge: r.challenge,//验证流水号 ,string,必选,
                 container: $('#vaptchaContainer'),//验证码容器,element,必选,
                 type: "popup",//验证码类型,string,默认float,可选择float,popup,embed,
                 https: true,//是否是https , boolean,默认true,(false:http),
                 color:"#57ABFF",//点击式按钮的背景颜色,string
                 // outage: '/server/auth.php/getDowTime',
                 outage: '{{ route('vap_down') }}',
                 success: function (token, challenge) {//当验证成功时执行回调,function,参数token为string,必选,
                     //提交表单时将token，challenge一并提交，作为验证通过的凭证，服务端进行二次验证
                     form.token = token;
                     form.challenge = challenge;
                     $('#challenge').val(form.challenge);
                     $('#token').val(form.token);
         
                     $('form.form-horizontal').submit();
                 },
                 fail: function () {//验证失败时执行回调
                     //todo:执行人机验证失败后的事情
                 }
             }
             //vaptcha对象
             var vaptcha_obj;
             window.vaptcha(options, function (obj) {
                 vaptcha_obj = obj;
                 //执行初始化
                 vaptcha_obj.init();
             });
         }, 'json')

        }
      
        $('button.btn-primary').click(function(e){
        
        
            if (!form.token) {
                // alert('请进行人机验证');
                $('#vaptchaContainer').css("display","block");
                e.preventDefault();
                return false;
            }
        
            // form.phone = $('input[name=phone]').val();
            // form.password = $('input[name=password]').val();
            // $.post('/server/auth.php/login', form, function(data){
            //     alert(data.msg)
            // });
            $('form.form-horizontal').submit();
        });
    </script>
</body>
</html>

