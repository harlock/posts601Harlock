@extends('layout.layout')
@section('title','Categorias')
@section('content')
    <h1 class="bg-primary text-white text-center">Categorias</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("categorias/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Categoria</th>
                <th>Descripción</th>
                <th colspan="2">Acciones</th>

                </thead>
                <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{$categoria->id_catpreg}}</td>
                        <td>{{$categoria->nom_cat}}</td>
                        <td>
                            <a href="{{route("categorias.edit",$categoria->id_catpreg)}}" class="btn btn-outline-primary" name="actualizar"><i class="far fa-edit"></i></a>
                        </td>
                        <td>
                            <form action="{{url("categorias")."/".$categoria->id_catpreg}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button href="" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-minus-circle"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection


