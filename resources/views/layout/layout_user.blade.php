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
    <header class="bg-primary">
        @component('partials.menu')
        @endcomponent
    </header>
    <section class="container">
        @yield("content")

        @guest
            <h1 class="bg-danger text-white">no has iniciado sesion</h1>
        @endguest
    </section>
    <footer class="bg-primary text-white ">
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