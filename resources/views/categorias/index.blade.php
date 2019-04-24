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
                <th>Descripcion</th>
                <th colspan="2"> Acciones</th>

            </thead>
            <tbdoy>
                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{$categoria->id_catpreg}}</td>
                        <td>{{$categoria->nom_cat}}</td>
                        <td><a href="" class="btn btn-outline-primary"><i class="far fa-edit"></i></a></td>
                        <td>
                            <form action="{{route("categorias.destroy",$categoria->id_catpreg)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button href="" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbdoy>
        </table>
    </div>
</div>
@endsection
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quae deleniti sit, reiciendis! Voluptatem earum dolor quod adipisci, blanditiis veniam. Obcaecati quisquam enim atque ad iure facere facilis, labore voluptatem.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum fugit a, aliquid vero et culpa quibusdam ea dolorum ipsam inventore. Tempora ipsum voluptate suscipit rerum, architecto consectetur saepe blanditiis quibusdam?