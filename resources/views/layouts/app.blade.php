<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Glyphicon -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">        
    <style type="text/css">
        body {
            padding-top: 74px;            
        }
        nav .navbar-brand{
            height: 65px;            
        }
        #dlappbtn {
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
            border-width: 2px;
        }
        #dlappbtn:hover #dlapp {
            color: #8DC63F;
        }
        #dlappbtn:hover {
            background-color: black;         
        }
        #fb-footer {
            color: white;
        }
        #fb-footer:hover {
            color: #8DC63F;
            text-decoration: none;
        }
        #comein:hover {
            color: #9d9d9d;
        }
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body background="https://www.go-jek.com/assets/gojek/images/texture-a.jpg">        
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>                    

                    <!-- Branding Image -->
                    <img class="pull-left" src="/img/logo.png" style="height: 50px; width: auto; padding-top: 25px;">
                    <a class="navbar-brand" href="{{ url('/') }}" style="font-size: 18px; padding-top: 30px;">
                        <font color="#FFF"><b>Express Tailor</b></font>
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
                        @if (Auth::guest())
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 18px; padding-top: 27px;">
                                <font color="#FFF" id="comein">Gabung</font> <font color="#8DC63F"><span class="caret"></span></font>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a href="{{ route('register') }}">Daftar</a></li>
                          </ul>
                      </li>
                      <li><a href="#"><button id="dlappbtn" class="btn navbar-inverse btn-lg" style="border-color: white;"><font id="dlapp" color="white">Download APP</font></button></a></li>
                      @else
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="font-size: 18px; padding-top: 25px;">
                            {{ Auth::user()->name }} <font color="#8DC63F"><span class="caret"></span></font>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout <span class="glyphicon glyphicon-log-out pull-right"></span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>                                        
                    </ul>                
                    <li><a href="#"><button class="btn navbar-inverse btn-lg" style="border-color: white;"><font id="dlapp" color="white">Download APP</font></button></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer style="padding-bottom: 12px;">    
        <div class="footer">
            <center><font color="white">Designed by <a id="fb-footer" href="https://www.facebook.com/abdlahafizh">Abdullah Hafizh</a></font></center>
        </div>        
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
