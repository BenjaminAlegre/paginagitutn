@extends('base')

@section('contenido')

    <form method="POST" action="{{ route('login.store') }}">
        @csrf
        <input class="form-control" type="text" name="usuario" placeholder="Nombre de usuario">
        <input class="form-control" type="password" name="contrasenia" placeholder="Contraseña">

        <button type="submit">Entrar!</button>
    </form>

@endsection
