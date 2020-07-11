<?php

    class ProcesosEmpleador {

        private $db;

        public function __construct(){
            //requerimos la conexion de la base de datos
            require_once('conexion.php');
            $this->db = Conexion::Conectar();    
        }

        // metodos para gestionar el empleador


        // agregar empelador a la base de datos
        public function agregarEmpleador($obj_empleador){
            
            $consulta1 = $this->db->query("INSERT INTO empleador VALUES (NULL," . "'" . $obj_empleador->getNombre()."', '".$obj_empleador->getGenero() .
                                         "', " .$obj_empleador->getCedula().",'".$obj_empleador->getDireccion()."', '" .$obj_empleador->getFecha()."')");
            if($consulta1->rowCount()){
                return true;
            }else{
                return false;
            }
        }

        public function getNombreEmpleados(){
            $consulta2 = $this->db->query("SELECT * FROM empleador");
            $lista = array();

			while($registro = $consulta2->fetch(PDO::FETCH_ASSOC)){

				$lista[] = $registro;
            }
            
            return $lista;
        }
    
        public function mostrarEmpleador(){
            
        }
    }


?>