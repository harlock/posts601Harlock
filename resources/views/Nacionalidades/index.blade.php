@extends('layout.layout')
@section('title','Nacionalidades')
@section('content')

    <h1 class="bg-primary text-white text-center">Nacionalidades</h1>

    <a href="{{url('nacionalidades/create')}}">Agregar</a>

    <div class="row">
        <div class="col">
            <table class="table">
                <thread>
                    <th>Id Nacionalidad</th>
                    <th> Nacionalidad</th>
                </thread>
                <tbdoy>
                    @foreach($nacionalidades as $nacionalidad)
                    <tr>
                        <td>{{$nacionalidad->id_nacionalidad}}</td>
                        <td>{{$nacionalidad->nom_na}}</td>
                    </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>
@endsection
