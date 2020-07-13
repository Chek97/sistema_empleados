<?php 
// Creamos un modelo para crear un objeto empleado
class Empleado {
    
    private $nombre;
    private $genero;
    private $cedula;
    private $telefono;
    private $contrato;
    private $id_empleador;
    
    public function __construct($atr_nombre, $atr_genero, $atr_cedula,
                                $atr_telefono, $atr_contrato, $atr_empelador){
           //guardamos los valores en los respectivos atributos
           $this->nombre = $atr_nombre;
           $this->genero = $atr_genero;
           $this->cedula = $atr_cedula;
           $this->telefono = $atr_telefono;
           $this->contrato = $atr_contrato;
           $this->id_empleador = $atr_empelador;
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

    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($atr_telefono){
        $this->telefono = $atr_telefono;
    }

    public function getContrato(){
        return $this->contrato;
    }

    public function setContrato($atr_contrato){
        $this->contrato = $atr_contrato;
    }

    public function getEmpleador(){
        return $this->id_empleador;
    }

    public function setEmpleador($atr_empelador){
        $this->id_empleador = $atr_empelador;
    }


}
?>