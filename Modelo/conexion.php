<?php
    //clase que genera la conexion con la base de datos
    class Conexion {

        //inicializamos la conexion
        public static function Conectar(){
            
            try {
                $conexion = new PDO('mysql:host=localhost;dbname=sistema_empleados', 'root', '');
    
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion->exec('SET CHARACTER SET utf8');

                return $conexion;

            } catch (Exception $e) {
                echo 'No se pudo conectar a la base de datos ' . $e->getMessage();
            }
            
        }

    }



?>