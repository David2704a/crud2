@extends('users.layout')
@section('content')
<div class="card" style="margin: 20px">
    <div class="card-header">Editar Estudiante</div>
    <div class="card-body">

        <form action="{{ url('usuarios/' .$users->id) }}" method="POST">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $users->id }}">
            <label for="">Nombre</label><br>
              <input type="text" name="names" id="names" value="{{ $users->names }}" class="form-control"><br>
              <label for="">Apellidos</label><br>
              <input type="text" name="apellidos" id="apellidos" value="{{ $users->apellidos }}" class="form-control"><br>
              <label for="">Fecha De Nacimiento</label><br>
              <input type="date" name="fecha" id="fecha" value="{{ $users->fecha }}" class="form-control"><br>
              <label for="">Género</label><br>
              <input type="text" name="genero" id="genero" value="{{ $users->genero }}" class="form-control"><br>
              <label for="">Teléfono</label><br>
              <input type="text" name="telefono" id="telefono" value="{{ $users->telefono }}" class="form-control"><br>
              <label for="">Correo</label><br>
              <input type="email" name="email" id="email" value="{{ $users->email }}" class="form-control"><br>
              <label for="">Contraseña</label><br>
              <input type="password" name="password" id="password" value="{{ $users->password }}" class="form-control"><br>
              <label for="">Confirmar Contraseña</label><br>
              <input type="password" name="password_confirmation" id="password_confirmation" value="{{ $users->password }}" class="form-control"><br><br>
              <input type="submit" value="Actualizar" class="btn btn-success"><br>
        </form>

    </div>
</div>
@stop