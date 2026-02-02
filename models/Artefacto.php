<?php
class Artefacto extends EntidadEstelar{
    private $antig;

    function __construct($ID, $nombre,$planetaOrigen,$nivelEstabilidad, $antig){ //Nota: al padre le ponemos $raza, porque el parent::__construct, 
        parent::__construct($ID, $nombre,$planetaOrigen,$nivelEstabilidad);
        $this->antig = $antig;}
    function getAntig(){return $this->antig;}
    function setAntig($antig){return $this->antig = $antig;}
}