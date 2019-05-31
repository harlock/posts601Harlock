@extends('layout.layout_admin')
@section('title','Categorias')
@section('content')
    <h1 class="bg-primary text-white text-center">Preguntas</h1>

    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id preguntas</th>
                <th>pregunta</th>
                <th>usuario</th>
                <th>categoria</th>

                <th>Nacionalidad</th>

                </thead>
                <tbody>
                @foreach($preguntas as $pregunta)
                    <tr>
                        <td>{{$pregunta->id_pregunta}}</td>
                        <td>{{$pregunta->pregunta}}</td>
                        <td>{{isset($pregunta->getUser[0])?$pregunta->getUser[0]->nom_p:"usuario no encontrado"}}</td>
                        <td>{{$pregunta->getCategoria[0]->nom_cat}}</td>
                        <td>{{isset($pregunta->getUser[0])?isset($pregunta->getUser[0]->getNacionalidad[0])?$pregunta->getUser[0]->getNacionalidad[0]->nom_na:"nacionalidad no encontrada":"usuario no encontrado"}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection


