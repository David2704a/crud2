@extends('users.layout')
@section('content')
<div class="card" style="margin: 20px">
    <div class="card-header">Crear nuevo usuario</div>
    <div class="card-body">

        <form action="{{ url('usuarios') }}" method="POST">
              {!!  csrf_field() !!}
              <label for="">Nombre</label><br>
              <input type="text" name="names" id="names" class="form-control"><br>
              <label for="">Apellidos</label><br>
              <input type="text" name="apellidos" id="apellidos" class="form-control"><br>
              <label for="">Fecha De Nacimiento</label><br>
              <input type="date" name="fecha" id="fecha" class="form-control"><br>
              <label for="">Género</label><br>
              <input type="text" name="genero" id="genero" class="form-control"><br>
              <label for="">Teléfono</label><br>
              <input type="text" name="telefono" id="telefono" class="form-control"><br>
              <label for="">Correo</label><br>
              <input type="email" name="email" id="email" class="form-control"><br>
              <label for="">Contraseña</label><br>
              <input type="password" name="password" id="password" class="form-control"><br>
              <label for="">Confirmar Contraseña</label><br>
              <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"><br><br>
              <input type="submit" value="Guardar" class="btn btn-success"><br>
        </form>
    </div>
</div>    

@stop