<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>@yield('title')</title>
    
    @section('styles')
    <!-- Fonts -->
    <!-- Styles -->
    
    <link href="/css/app.css" rel="stylesheet">
     @show
     <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> 
      <link rel="shortcut icon" href="/images/icon.ico" type="image/x-icon">
</head>

<body>
    <header class="header-main">
        <a href="/">
        <div class="logo "></div>
         </a>
        <div class="logo-text">
        <h1>Our Site</h1>
        </div>
       
        <ul class="authAndSearch">
            <li class="li-auth">
               
                <div class="collapse navbar-collapse" id="app-navbar-collapse ">
                    <!-- Left Side Of Navbar -->
 <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav auth ">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                            <ul class="dropdown-menu" role="menu">
                               <li>
                                <a style="color:#fff" href="/home">Home</a>
                                </li>
                                <li>
                                    <a style="color:#fff" href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>

                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </li>
            <li>
                <div>
                    <form class="search "name="search" action="search" method="POST">
                        {{csrf_field()}}
                        <input class="inp_search" type="text" name="main_search" placeholder="Search">
                        <button class= "but_search" type="submit">Search</button>
                    </form>
                </div>
            </li>
        </ul>

    </header>
    <main>
       <div class="container-fluid">
       <div class="row">
        <div class="left-menu col-md-2">
            <nav>
                <ul class="nav navigation">
                @foreach($cats->all() as $one)
                                <li><a href="{{asset('catalog/'.$one->id)}}">
                                {{$one->name}}
                                </a></li>
                                 @endforeach 
                   
                    
                </ul>
            </nav>
        </div>
        <div class="content col-md-8">
            @yield('content')
        </div>
        </div>
    </div>
    </main>
    <div class="rasporka"></div>
    <footer class="main">
        <div class="f_logo">
            <a href="/"><img src="../images/logo.png" alt="Our Site Logo" class="footer-logo"></a>
            <p>Copyright © 2012 Our Site. A <a href="www.bsuir.by">BSUIR</a> creation</p>
        </div>
    </footer>
       <script src="/js/app.js"></script>
</body>

</html>