@extends('layout.layout_admin')
@section('title','Agregar Categorias')
@section('content')
    <h1 class="bg-primary text-white text-center">Agregar categorias</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("categorias")}}">Regresar</a></div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("categorias")}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Nombre Categorias</label>
                    <input type="text" class="form-control" name="nom_cat" placeholder="categoria">
                </div>
                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>
@endsection