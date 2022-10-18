@extends('users.layout')
@section('content')
<div class="container">
    <div class="row" style="margin:20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Recip-NL CRUD</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/usuarios/create') }}" class="btn btn-success btn-sm" title="Añadir nuevo usuario">
                        Añadir nuevo
                    </a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>Género</th>
                                    <th>Teléfono</th>
                                    <th>Correo</th>
                                    <th>Contraseña</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->names }}</td>
                                    <td>{{ $item->apellidos }}</td>
                                    <td>{{ $item->fecha }}</td>
                                    <td>{{ $item->genero }}</td>
                                    <td>{{ $item->telefono }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->password }}</td>
                                    <td>
                                        <a href="{{ url('/usuarios/' . $item->id) }}" title="View User"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                        <a href="{{ url('/usuarios/' . $item->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"> Editar</i></button></a>
                                        <form method="POST" action="{{ url('/usuarios/' . $item->id) }}" accept-charset="UTF_8" style="display: inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" title="Delete User" class="btn btn-danger btn-sm" onclick="return confirm('Confirmar eliminación?')"><i class="fa fa-pencil-square-o" aria-hidden="true"> Eliminar</i></button>
                                        </form>
                                        
                                    </td>
                                </tr>

                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection