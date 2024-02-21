<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Controlador Vista</title>
</head>
<body>
    <h1>Home | Controller Vista</h1>

    <table width=10% border='2'>
        <caption>Listado Clientes</caption>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente['id'] }}</td>
                <td>{{ $cliente['nombre'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @if ($nivel == 1)
        <p>Estoy en primer curso</p>
    @else
        <p>Estoy en segundo curso</p>
    @endif

    <footer>
        <p>Autor: {{ $autor }}</p>
        <p>Curso: {{ $curso }}</p>
        <P>Módulo: {{ $modulo ?? 'Base de datos' }}</P>
    </footer>
    {{-- Esto es un comentario en Blade --}}
</body>
</html>