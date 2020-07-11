<?php

    class ProcesosEmpleado {

        private $db;

        public function __construct(){
            //requerimos la conexion de la base de datos
            require_once('conexion.php');
            $this->db = Conexion::Conectar(); 
        }

        // metodos para gestionar el empleado

        // agregar empelado a la base de datos
        
        public function agregarEmpleado($obj_empleado){
            
            $consulta1 = $this->db->query("INSERT INTO empleado VALUES (NULL," . "'" . $obj_empleado->getNombre()."', '".$obj_empleado->getGenero() .
                                         "', " .$obj_empleado->getCedula().", ".$obj_empleado->getTelefono().", '" .$obj_empleado->getContrato()."', '" . $obj_empleado->getEmpleador() . "')");
            if($consulta1->rowCount()){
                return true;
            }else{
                return false;
            }
        }

        public function getEmpleados(){
            $consulta2 = $this->db->query("SELECT * FROM empleado");
            $lista = array();

			while($registro = $consulta2->fetch(PDO::FETCH_ASSOC)){

				$lista[] = $registro;
            }
            
            return $lista;
        }
    }

?>