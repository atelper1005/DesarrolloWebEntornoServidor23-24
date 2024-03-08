{{-- 
    Creamos una vista a partir del layout
    Vista principal Alumnos
--}}
@extends('layout.layout');

@section('titulo', 'Home Alumnos');
@section('subtitulo', 'Panel Control Alumnos');

@section('contenido')

    <!-- @include('partials.alerts') -->

    {{-- menú de clientes --}}
    @include('student.partials.menu')
    {{-- Fin del menu --}}

    {{-- Lista de alumnos --}}

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Apellidos</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Ciudad</th>
                <th>Email</th>
                <th>Curso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($alumnos as $alumno) 
            <tr>
                <!-- registro alumnos -->
                <td scope="row">{{ $alumno['id']  }}</td>
                <td>{{ $alumno->apellidos  }}</td>
                <td>{{ $alumno->nombre  }}</td>
                <td>{{ $alumno->telefono }}</td>
                <td>{{ $alumno->ciudad  }}</td>
                <td>{{ $alumno->email  }}</td>
                <td>{{ $alumno->curso }}</td>
                <td>
                    <!-- botones de accion -->
                    <a href="alumnos/edit/{{$alumno->id}}" title="Editar"><i class="bi bi-pencil-fill"></i></a>
                    <a href="alumnos/show/{{$alumno->id}}" title="Mostrar"><i class="bi bi-eye-fill"></i></a>
                    <a href="alumnos/destroy/{{$alumno->id}}" title="Eliminar"><i class="bi bi-trash-fill" onclick="return confirm('Confimar elimación del alumno')"></i></a>

                </td>
            </tr>
        @empty 
            <p>No hay alumnos registrados.</p> 
        @endforelse
        </tbody>
    </table>
    {{-- Fin lista --}}
    <br><br><br>

@endsection