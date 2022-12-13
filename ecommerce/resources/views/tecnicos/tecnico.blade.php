@extends('base')

@section('contenido')

@if(isset($errors) && $errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tecnicos.store') }}" method="POST">
    @csrf
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre"
               @if(isset($tecnico)) value="{{ $tecnico->nombre }}" @endif
            @if(empty($errors->get('nombre')))
               @if(!is_null(old('nombre'))) value="{{ old('nombre') }}" @endif
            @else
                class="form-control is-invalid"
            @endif
        >
    </div>

    <div>
        <label>Apellido</label>
        <input type="text" name="apellido"
                @if(isset($tecnico)) value="{{ $tecnico->apellido }}" @endif
                @if(!is_null(old('apellido'))) value="{{ old('apellido') }}" @endif
                @class([
        'form-control',
        'is-invalid' => $errors->has('apellido')
])
        >
    </div>

    <div>
        <label>Legajo</label>
        <input type="number" name="legajo" @if(isset($tecnico)) value="{{ $tecnico->legajo }}" @endif @if(!is_null(old('legajo'))) value="{{ old('legajo') }}" @endif>
    </div>

    <div>
        <label>¿Está ocupado?</label>
        <input type="" name="">
    </div>

    <div>
        <button type="submit">Guardar cambios</button>
    </div>
</form>

@endsection
