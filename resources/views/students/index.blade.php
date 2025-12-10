@extends('layouts.app')
@section('title', 'Estudiantes')

@section('content')
<h1>Lista de Estudiantes</h1>

<a href="{{ route('students.create') }}">Nuevo estudiante</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Lenguaje</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($students as $s)
        <tr>
            <td>{{ $s['id'] }}</td>
            <td>{{ $s['name'] }}</td>
            <td>{{ $s['email'] }}</td>
            <td>{{ $s['phone'] }}</td>
            <td>{{ $s['language'] }}</td>
            <td>
                <a href="{{ route('students.edit', $s['id']) }}">Editar</a>
                <form action="{{ route('students.destroy', $s['id']) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button>Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection