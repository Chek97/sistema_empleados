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
    <div class="container contenedor">
        <div>
            <a href="principal.php"><button type="button" class="btn btn-danger boton-accesso"><i class="fa fa-arrow-left"></i> Regresar</button></a>
        </div>
        <header class="titulo">
            <h1 class="texto-titulo">Tabla de Reportes</h1>
        </header>
        <?php
            if(count($lista_empleadores) == 0 || count($lista_empleados) == 0){
        ?>
            <div class="alert alert-warning mt-4 alert-dismissible fade show" style="text-align: center;" role="alert">
                <strong>No hay empleados asignados por empleadores</strong>
                
            </div>
            <br>
        <?php  
            }else{
        ?>
        <div class="table-responsive mt-4">
            <table class="table table-bordered table-hover tabla-reporte">
                <thead>
                    <tr class="titulo">
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
        <?php } ?>

    </div>
<?php include_once('Includes/footer.php'); ?>
</body>
</html>