<?php 
// Creamos un modelo para crear un objeto empleador
class Empleador {
    
    private $nombre;
    private $genero;
    private $cedula;
    private $direccion;
    private $fecha;
    
    public function __construct($atr_nombre, $atr_genero, $atr_cedula,
                                $atr_direccion, $atr_fecha){
           //guardamos los valores en los respectivos atributos
           $this->nombre = $atr_nombre;
           $this->genero = $atr_genero;
           $this->cedula = $atr_cedula;
           $this->direccion = $atr_direccion;
           $this->fecha = $atr_fecha;
    }

    // metodos get y set de los respectivos atributos
    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($atr_nombre){
        $this->nombre = $atr_nombre;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function setGenero($atr_genero){
        $this->genero = $atr_genero;
    }

    public function getCedula(){
        return $this->cedula;
    }

    public function setCedula($atr_cedula){
        $this->cedula = $atr_cedula;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function setDireccion($atr_direccion){
        $this->direccion = $atr_direccion;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function setFecha($atr_fecha){
        $this->fecha = $atr_fecha;
    }


}
?>