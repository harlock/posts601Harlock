<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset("css/app.css")}}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>@yield("title")</title>
</head>
<body>
    <header class="bg-secondary">
        <ul class="nav justify-content-center">


            @guest
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>


                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else

                @if(Auth::user()->tipo_usuario==3||Auth::user()->tipo_usuario==2)
                    <li class="nav-item"><a href="#!" class="nav-link text-white">Home</a></li>
                    <li class="nav-item"><a href="#!" class="nav-link text-white">Post</a></li>

                @endif
                @if(Auth::user()->tipo_usuario==3)
                    <li class="nav-item"><a href="{{url("categorias")}}" class="nav-link text-white">Categorias</a></li>
                    <li class="nav-item"><a href="{{url("nacionalidades")}}"
                                            class="nav-link text-white">Nacionalidad</a>
                    </li>

                    <li class="nav-item"><a href="{{url("personas")}}" class="nav-link text-white">Usuarios</a></li>
                @endif
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest


        </ul>
    </header>
    <section class="container">
        @yield("content")

        @guest
            <h1 class="bg-danger text-white">no has iniciado sesion</h1>
        @endguest
    </section>
    <footer class="bg-secondary text-white ">
        <div class="container">
            <div class="row font-weight-bold">
                <div class="col-12 col-md-6  .col-lg-6 text-center">powered by {{'@'}}Harlock</div>
                <div class="col-12 col-md-6  .col-lg-6 text-center">
                    <span><i class="fab fa-facebook-f"></i></span>
                    <span><i class="fab fa-youtube"></i></span>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>