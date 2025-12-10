@extends('layouts.app')
@section('title', 'Editar estudiante')

@section('content')
<h2>Editar estudiante</h2>

<form action="{{ route('students.update', $student['id']) }}" method="POST">
    @csrf @method('PUT')

    <input type="text" name="name" value="{{ $student['name'] }}"><br><br>
    <input type="email" name="email" value="{{ $student['email'] }}"><br><br>
    <input type="text" name="phone" value="{{ $student['phone'] }}"><br><br>
    <input type="text" name="language" value="{{ $student['language'] }}"><br><br>

    <button>Actualizar</button>
</form>
@endsection