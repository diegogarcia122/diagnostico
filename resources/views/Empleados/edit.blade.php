<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<header>
    <h3>Editar Empleado</h3>
</header>
<body>
    <form action="{{ route('Empleados.update', $empleados->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label>Cédula</label>
            <input type="text" id="cedula" name="cedula" value="{{ $empleados->cedula }}" required>
        </div>
        <br>
        <div>
            <label>Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $empleados->nombre }}" required>
        </div>
        <br>
        <div>
            <label>Apellido</label>
            <input type="text" id="apellido" name="apellido" value="{{ $empleados->apellido }}" required>
        </div>
        <br>
        <div>
            <label>Ciudad</label>
            <input type="text" id="ciudad" name="ciudad" value="{{ $empleados->ciudad }}" required>
        </div>
        <br>
        <div>
            <label>Cargo</label>
            <input type="text" id="cargo" name="cargo" value="{{ $empleados->cargo }}" required>
        </div>
        <br>
        <div>
        <label>Salario (C$)</label>
        @if ($empleados->salario < 10000)
            <input type="text" id="salario" name="salario" value="{{ $empleados->salario }}" required>
        @else
            <p>{{ $empleados->salario }}</p>
        @endif
        </div>
        <br>
        <div>
            <button type="submit">Actualizar</button>
        </div>
    </form>
</body>
</html>