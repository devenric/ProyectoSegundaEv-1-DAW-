<?php
abstract class EntidadEstelar{
    protected $ID;
    protected $nombre;
    protected $planetaOrigen;
    protected $nivelEstabilidad;

    function __construct($ID, $nombre,$planetaOrigen,$nivelEstabilidad){
        $this->ID = $ID;
        $this->nombre = $nombre;
        $this->planetaOrigen = $planetaOrigen;
        $this->nivelEstabilidad = $nivelEstabilidad;
    }
    function getID(){return $this->ID;}
    function setID(){return $this->ID;}

    function getNombre(){return $this->nombre;}
    function setNombre(){return $this->nombre;}
    
    function getPlanetaOrigen(){return $this->planetaOrigen;}
    function setPlanetaOrigen(){return $this->planetaOrigen;}
    
    function getNivelEstabilidad(){return $this->nivelEstabilidad;}
    function setNivelEstabilidad(){return $this->nivelEstabilidad;}
}