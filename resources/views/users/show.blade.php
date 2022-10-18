@extends('users.layout')
@section('content')
<div class="card" style="margin:20px;">
    <div class="card-header">Students Page</div>
    <div class="card-body">
          <div class="card-body">
          <h5 class="card-title">Nombre : {{ $users->names }}</h5>
          <h5 class="card-title">Apellidos : {{ $users->apellidos }}</h5>
          <p class="card-text">Fecha De Nacimiento : {{ $users->fecha }}</p>
          <p class="card-text">Género : {{ $users->genero }}</p>
          <p class="card-text">Teléfono : {{ $users->telefono }}</p>
          <p class="card-text">Correo : {{ $users->email }}</p>
          
    </div>
      
    </div>
  </div>