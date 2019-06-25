@extends('layout.layout_admin')
@section('title','Grafica')
@section('content')
    <div id="app_grafica">
        {!! $chart->container() !!}
    </div>
    <script src="https://unpkg.com/vue"></script>
    <script>
        var app = new Vue({
            el: '#app_grafica',
        });
    </script>

    <script src="{{asset("js/chartjs.js")}}" type="text/javascript"
            charset=utf-8></script>
    {!! $chart->script() !!}
@endsection
