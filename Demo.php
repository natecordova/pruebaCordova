<?php

class Demo
{
    private $iddemo;
    private $nombre;
        private $tipo;
        private $fechaNacimiento;
     function __construct($iddemo, $nombre) {
       $this->iddemo = $iddemo;
       $this->nombre = $nombre;
   
     }
    
     function setIdDemo($iddemo){
       $this->iddemo = $iddemo;
     } 
     function getIdDemo(){
       return $this->iddemo;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     }
	     function setFechaNacimiento($fechaNacimiento){
       $this->fechaNacimiento = $fechaNacimiento;
     } 
     function getFechaNacimiento(){
       return $this->fechaNacimiento;
     }


 
}

?> 
