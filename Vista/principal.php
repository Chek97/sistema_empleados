<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Empleados</title>
    <?php include('Includes/header.php'); ?>
</head>
<body>
    <div class="container">
        <header>
            <h1>Sistema de empleados de sylphica</h1>
        </header>
        <div>
            <p>Por favor seleccione la opcion que desea</p>
        </div>
        <div>
            <a href="vista_crear_empleador.php"><button type="button" class="btn btn-primary">Crear Empleador</button></a>
            <a href="vista_crear_empleado.php"><button type="button" class="btn btn-primary">Crear Empleado</button></a>
            <a href="vista_reporte.php"><button type="button" class="btn btn-success">Ver Reporte</button></a>
        </div>
    </div>

<?php include('Includes/footer.php'); ?>
</body>
</html>