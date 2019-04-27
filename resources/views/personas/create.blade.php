@extends('layout.layout')
@section('title','Añadir Personas')
@section('content')
    <h1 class="bg-primary text-white text-center">Añadir Empleados</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("personas")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("personas")}}">
                @csrf
                <div class="form-group">
                    <label for="nom_p">Nombre empleado</label>
                    <input type="text" class="form-control" name="nom_p" placeholder="Nombre">

                    <label for="exampleInputPassword2">Apellido Paternos</label>
                    <input type="text" class="form-control" name="ap_p" placeholder="Apellido">

                    <label for="exampleInputPassword3">Apellido Materno</label>
                    <input type="text" class="form-control" name="am_p" placeholder="Dirección">

                    <label for="exampleInputPassword4">Nacionalidad</label>


                    <select name="id_nacionalidad" id="">
                        @foreach($nacionalidades as $nacionalidad)

                            <option value="{{$nacionalidad->id_nacionalidad}}">{{$nacionalidad->nom_na}}</option>
                        @endforeach
                    </select>

                    <!--<input type="checkbox" value="hola" name="check">activame-->

                </div>
                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>

@endsection