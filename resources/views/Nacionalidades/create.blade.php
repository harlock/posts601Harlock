
@extends("layout.layout_admin")
@section('title','Agregar Nacionalidades')

@section('content')

    <h1 class="bg-primary text-white text-center">Agregar Nacionalidades</h1>


    <div class="row">
        <div class="col">
            <a href="{{url('nacionalidades')}}"> Regresar</a>

        </div>
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
            <form method="post" action="{{url('nacionalidades')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Nombre nacionalidad</label>
                    <input type="text" class="form-control" name="desc_nacionalidad" placeholder="Nacionalidades">

                </div>
                <button type="submit" class="btn btn-primary"> Aceptar</button>
            </form>
        </div>
    </div>

@endsection