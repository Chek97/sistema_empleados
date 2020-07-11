<?php
    require_once('../Modelo/modelo_procesos_empleador.php');
    require_once('../Modelo/modelo_procesos_empleado.php');

    $accion_empleador = new ProcesosEmpleador();
    $accion_empleado = new ProcesosEmpleado();

    $lista_empleadores = $accion_empleador->getNombreEmpleados();
    $lista_empleados = $accion_empleado->getEmpleados();

?>