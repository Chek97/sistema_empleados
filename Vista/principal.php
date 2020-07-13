<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Empleados</title>
    <?php include('Includes/header.php'); ?>
</head>
<body>
    <div class="container contenedor">
        <header class="titulo">
            <h1 class="texto-titulo">SISTEMA DE EMPLEADOS Symplifica</h1>
        </header>
        <div class="texto-principal">
            <p>Por favor seleccione la opcion que desea</p>
        </div>
        <div class="botones-principal">
            <a href="vista_crear_empleador.php"><button type="button" class="btn btn-primary boton-accesso"><i class="fas fa-save"></i> Crear Empleador</button></a>
            <a href="../Controlador/controlador_empleado.php"><button type="button" class="btn btn-primary boton-accesso"><i class="fas fa-save"></i> Crear Empleado</button></a>
            <a href="vista_reporte.php"><button type="button" class="btn btn-success boton-accesso"><i class="fa fa-file"></i> Ver Reporte</button></a>
        </div>
        <div class="alert alert-info mt-4 alert-dismissible fade show" role="alert">
            <strong>NOTA: </strong>Si no hay empleadores registrados, no puedes crear empleados ni ver los reportes
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <br>
    </div>

<?php include('Includes/footer.php'); ?>
</body>
</html>