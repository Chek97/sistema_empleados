<?php
    //clase que genera la conexion con la base de datos
    class Conexion {

        //inicializamos la conexion
        public static function Conectar(){
            
            try {
                //utiilizamos la libreria de PDO
                $conexion = new PDO('mysql:host=localhost;dbname=sistema_empleados', 'root', '');
    
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion->exec('SET CHARACTER SET utf8');

                //retornamos un objeto conexion
                return $conexion;

            } catch (Exception $e) {
                //si la conexion a la bd no se realiza correctamente, entonces se dara un error
                echo 'No se pudo conectar a la base de datos ' . $e->getMessage();
            }
            
        }

    }



?>