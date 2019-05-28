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