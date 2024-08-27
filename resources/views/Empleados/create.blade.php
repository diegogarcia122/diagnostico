<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<header>
    <h3>Agregar un Empleado</h3>
</header>
<body>
<form action="{{ route('Empleados.store') }}" method="post">
    @csrf
    <div>
        <label>Cedula</label>
        <input type="text" name="cedula" placeholder="Cedula">
    </div>
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre">
    </div>
    <div>
        <label>Apellido</label>
        <input type="text" name="apellido" placeholder="Apellido">
    </div>
    <div>
        <label>Ciudad</label>
        <input type="text" name="ciudad" placeholder="Ciudad">
    </div>
    <div>
        <label>Cargo</label>
        <input type="text" name="cargo" placeholder="Cargo">
    </div>
    <div>
        <label>Salario Base</label>
        <input type="text" name="salario" placeholder="Salario">
    </div>
    <div>
        <button type="submit">Agregar Empleado</button>
    </div>
</body>
</html>