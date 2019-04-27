@extends('layout.layout')
@section('title','Añadir Personas')
@section('content')
    <h1 class="bg-primary text-white text-center">modificar personas</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("personas")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("personas.update",$persona->id_persona)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="nom_p">Nombre empleado</label>
                    <input type="text" class="form-control" name="nom_p" value="{{$persona->nom_p}}" placeholder="Nombre">

                    <label for="exampleInputPassword2">Apellido Paternos</label>
                    <input type="text" class="form-control" name="ap_p" value="{{$persona->ap_p}}"placeholder="Apellido Paterno">

                    <label for="exampleInputPassword3">Apellido Materno</label>
                    <input type="text" class="form-control" name="am_p" value="{{$persona->am_p}}"placeholder="Apellido Materno">

                    <label for="exampleInputPassword4">Nacionalidad</label>


                    <select name="id_nacionalidad" id="">
                        <option value="">Selecciona un opcion</option>
                        @foreach($nacionalidades as $nacionalidad)
                            <option value="{{$nacionalidad->id_nacionalidad}}" {{$nacionalidad->id_nacionalidad==$persona->id_nacionalidad?"selected":""}} >{{$nacionalidad->nom_na}}</option>
                        @endforeach
                    </select>



                </div>
                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>

@endsection