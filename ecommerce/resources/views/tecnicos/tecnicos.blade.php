@extends('base')

@section('contenido')
<h2>{{ $titulo }}</h2>

@can('puede_crear_tecnicos')
    <div>
        <a href="{{ route('tecnicos.create') }}">Crear nuevo</a>
    </div>
@endcan

<div>
<p>{{ $usuario->apellido }}</p>
</div>

<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Legajo</th>
        <th>¿Está ocupado?</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
        @foreach($tecnicos as $tecnico)
            <tr>
                <td>{{ $tecnico->nombre }}</td>
                <td>{{ $tecnico->apellido }}</td>
                <td>{{ $tecnico->legajo }}</td>
                <td>
                    @if($tecnico->estaOcupado)
                        <label>Sí</label>
                    @else
                        <label>No</label>
                    @endif
                </td>
                <td>
                    <a href="{{ route('tecnicos.show', $tecnico->id) }}">Ver detalle</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('contenido2')
@endsection
