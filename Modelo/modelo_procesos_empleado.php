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
            
            $consulta1 = $this->db->prepare("INSERT INTO empleado VALUES (NULL, :nom, :gen, :ced, :tel, :con, :emp)");

            $consulta1->execute(array(':nom'=>$obj_empleado->getNombre(), ':gen'=>$obj_empleado->getGenero(), 
                                        ':ced'=>$obj_empleado->getCedula(), ':tel'=>$obj_empleado->getTelefono(),
                                        ':con'=>$obj_empleado->getContrato(), ':emp'=>$obj_empleado->getEmpleador()));                             
            if($consulta1->rowCount()){
                return true;
            }else{
                return false;
            }
        }

        // Obtner empleados de la base de datos

        public function getEmpleados(){
            $consulta2 = $this->db->prepare("SELECT * FROM empleado");
            $consulta2->execute();
            $lista = array();

			while($registro = $consulta2->fetch(PDO::FETCH_ASSOC)){

				$lista[] = $registro;
            }
            
            return $lista;
        }
    }

?>