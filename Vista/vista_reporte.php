<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
    <?php include_once('Includes/header.php');
          include('../Controlador/controlador_reportes.php'); ?>
</head>
<body>
    <div class="container mt-5">
        <div>
            <a href="principal.php"><button type="button" class="btn btn-danger">Regresar</button></a>
        </div>
        <header>
            <h1>Tabla de Reportes</h1>
        </header>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nombre Empleador</th>
                        <th>Cedula Empleador</th>
                        <th>Direccion Empleador</th>
                        <th>Nombre Empleado</th>
                        <th>Cedula Empleado</th>
                        <th>Contrato</th>
                    </tr>
                </thead>
                 <tbody>
                    <?php foreach($lista_empleadores as $empleador){
                            foreach($lista_empleados as $empleado){
                                if($empleador['id'] == $empleado['id_empleado']){
                    ?>
                    <tr>
                        <td><?php echo $empleador['nombre']?></td>
                        <td><?php echo $empleador['cedula']?></td>
                        <td><?php echo $empleador['direccion']?></td>
                        <td><?php echo $empleado['nombre']?></td>
                        <td><?php echo $empleado['cedula']?></td>
                        <td><?php echo $empleado['tipo_contrato']?></td>
                    </tr>
                    <?php       }
                            }
                        }    
                    ?>
                 </tbody>
            </table>
        </div>

    </div>
<?php include_once('Includes/footer.php'); ?>
</body>
</html>