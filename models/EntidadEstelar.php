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
    function setID($ID){return $this->ID = $ID;}

    function getNombre(){return $this->nombre;}
    function setNombre($nombre){return $this->nombre = $nombre;}
    
    function getPlanetaOrigen(){return $this->planetaOrigen;}
    function setPlanetaOrigen($planetaOrigen){return $this->planetaOrigen = $planetaOrigen;}
    
    function getNivelEstabilidad(){return $this->nivelEstabilidad;}
    function setNivelEstabilidad($nivelEstabilidad){return $this->nivelEstabilidad = $nivelEstabilidad;}
    abstract function reaccionar();
}