<?php
class MineralRaro extends EntidadEstelar{
    private $dureza;

    function __construct($ID, $nombre,$planetaOrigen,$nivelEstabilidad, $dureza){ //Nota: al padre le ponemos $raza, porque el parent::__construct, 
        parent::__construct($ID, $nombre,$planetaOrigen,$nivelEstabilidad);
        $this->dureza = $dureza;
    }
    function getDureza(){return $this->dureza;}
    function setDureza($dureza){return $this->dureza = $dureza;}
}