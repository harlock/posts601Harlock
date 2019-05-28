@extends('layout.layout_admin')
@section('title','Nacionalidades')
@section('content')
    <h1 class="bg-primary text-white text-center">Personas</h1>
    <a href="{{url("personas/create")}}">Agregar</a>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Personas</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th> Nacionalidad</th>

                </thead>
                <tbody>
                @foreach($personas as $persona)
                    <tr>
                        <td>{{$persona->id_persona}}</td>
                        <td>{{$persona->nom_p}}</td>
                        <td>{{$persona->ap_p}}</td>
                        <td>{{$persona->am_p}}</td>
                        <td>{{isset($persona->getNacionalidad[0])?$persona->getNacionalidad[0]->nom_na:""}}</td>
                        <td><a href="{{route("personas.edit",$persona->id_persona)}}">Modificar</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection