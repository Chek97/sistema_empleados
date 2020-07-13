<?php
    require('../Modelo/modelo_procesos_empleador.php');
    $accion_empleador = new ProcesosEmpleador();

    if($accion_empleador->obtenerEmpleadores()){
        header('location: ../Vista/vista_crear_empleado.php');
    }else{
        header('location: ../Vista/principal.php');
    }

?>