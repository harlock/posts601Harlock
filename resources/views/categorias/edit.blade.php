@extends('layout.layout')
@section('title','Agregar Categorias')
@section('content')
    <h1 class="bg-primary text-white text-center">Modificar categoria</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("categorias")}}">Regresar</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("categorias.update",$categoria->id_catpreg)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="nom_cat">Nombre Categorias</label>
                    <input type="text"  value="{{$categoria->nom_cat}}" id="nom_cat" class="form-control" name="nom_cat" placeholder="categoria">
                </div>
                <input type="text" value="601" name="clase">
                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>
@endsection