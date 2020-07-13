<?php
    //modelo para hacer consultas a la bd
    class ProcesosEmpleador {

        private $db;

        public function __construct(){
            //requerimos la conexion de la base de datos
            require_once('conexion.php');
            $this->db = Conexion::Conectar(); //obtenemos la conexion    
        }

        // metodos para gestionar el empleador


        // agregar empelador a la base de datos
        public function agregarEmpleador($obj_empleador){
            
            $consulta1 = $this->db->prepare("INSERT INTO empleador VALUES (NULL, :nom, :gen, :ced, :dir, :fec)");

            $consulta1->execute(array(':nom'=>$obj_empleador->getNombre(), ':gen'=>$obj_empleador->getGenero(), 
                                        ':ced'=>$obj_empleador->getCedula(), ':dir'=>$obj_empleador->getDireccion(),
                                        ':fec'=>$obj_empleador->getFecha()));

            if($consulta1->rowCount()){
                return true;
            }else{
                return false;
            }
        }

        //obtener todos los empleadores

        public function getNombreEmpleados(){
            $consulta2 = $this->db->prepare("SELECT * FROM empleador");

            $consulta2->execute();
            $lista = array();

			while($registro = $consulta2->fetch(PDO::FETCH_ASSOC)){

				$lista[] = $registro;
            }
            
            return $lista;
        }

        //Verificar si hay empleadores en la bd
    
        public function obtenerEmpleadores(){
            
            $consulta3 = $this->db->prepare("SELECT COUNT(*) total FROM empleador");
            $consulta3->execute();
            $cuenta = $consulta3->fetch(PDO::FETCH_ASSOC);

            if($cuenta['total'] > 0){
                return true;
            }else{
                return false;
            }
            
        }
    }


?>