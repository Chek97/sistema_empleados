<?php 
    //verificar que se quiere crear un empleado o empleador
    if(isset($_POST['crear_empleador'])){
        //requerimos de una instancia de empleador
        require_once('../Modelo/modelo_empleador.php');
        require_once('../Modelo/modelo_procesos_empleador.php');

        //creamos un objeto empleador
        $obj_empleador = new Empleador($_POST['nombre'], $_POST['sexo'], $_POST['cedula'], $_POST['direccion'], $_POST['fecha']);
        
        //creamos un objeto que gestione al empleador
        $accion_empleador = new ProcesosEmpleador();
        //agregamos el empleador a la base de datos
        if($accion_empleador->agregarEmpleador($obj_empleador) == true){
            //creamos variables de session para ennviar un mensaje
            session_start();
            $_SESSION['estado'] = 'success';
            $_SESSION['mensaje'] = 'El empleador fue agregado exitosamente';
            //regresamos a la pagina de creacion de empleadores
            header('location: ../Vista/vista_crear_empleador.php?exit=true');
        }else{
            //creamos variables de session para ennviar un mensaje
            session_start();
            $_SESSION['estado'] = 'danger';
            $_SESSION['mensaje'] = 'El empleador no fue agregado, lo sentimos';
            //regresamos a la pagina de creacion de empleadores
            header('location: ../Vista/vista_crear_empleador.php?exit=false');
        }

    }else{
        //requerimos de una instancia de empleado
        require_once('../Modelo/modelo_empleado.php');
        require_once('../Modelo/modelo_procesos_empleado.php');

        $obj_empleado = new Empleado($_POST['nombre'], $_POST['sexo'], $_POST['cedula'], $_POST['telefono'], $_POST['contrato'], $_POST['empleador']);
        $accion_empleado = new ProcesosEmpleado();

        if($accion_empleado->agregarEmpleado($obj_empleado) == true){
            //creamos variables de session para ennviar un mensaje
            session_start();
            $_SESSION['estado'] = 'success';
            $_SESSION['mensaje'] = 'El empleador fue agregado exitosamente';
            //regresamos a la pagina de creacion de empleadores
            header('location: ../Vista/vista_crear_empleado.php?');
        }else{
            //creamos variables de session para enviar un mensaje
            session_start();
            $_SESSION['estado'] = 'danger';
            $_SESSION['mensaje'] = 'El empleador no fue agregado, lo sentimos';
            //regresamos a la pagina de creacion de empleadores
            header('location: ../Vista/vista_crear_empleado.php?');
        }


    }





?>