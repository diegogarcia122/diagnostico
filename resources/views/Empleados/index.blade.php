<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<body>
<div class="container">
        <h2>Listado de Empleados</h2>
    </div>
    <div class="container">
        <a href="{{ route('Empleados.create') }}">Crear</a>
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>ciudad</th>
                    <th>cargo</th>
                    <th>salario</th>
                </tr>
            </thead>
            @foreach ($empleados as $empleados)
                    <tr>
                        <td>{{$empleados->cedula}}</td>
                        <td>{{$empleados->nombre}}</td>
                        <td>{{$empleados->apellido}}</td>
                        <td>{{$empleados->ciudad}}</td>
                        <td>{{$empleados->cargo}}</td>
                        <td>{{$empleados->salario}}</td>
                        <td><a href="{{ route('Empleados.edit', $empleados->id) }}">Editar</a></td>
                        <td>
                        <form action="{{ route('Empleados.destroy', $empleados->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>
</body>
</html>
    
