<?php
    //requerimos a los empleadores de la base de datos
    require('../Modelo/modelo_procesos_empleador.php');

    $obj_procesos = new ProcesosEmpleador();

    $lista_empleadores = array();

    $lista_empleadores = $obj_procesos->getNombreEmpleados();
?>