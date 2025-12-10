@extends('layouts.app')
@section('title', 'Crear estudiante')

@section('content')
<h2>Nuevo estudiante</h2>

<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nombre"><br><br>
    <input type="email" name="email" placeholder="Correo"><br><br>
    <input type="text" name="phone" placeholder="Teléfono"><br><br>
    <input type="text" name="language" placeholder="Lenguaje favorito"><br><br>

    <button>Guardar</button>
</form>
@endsection