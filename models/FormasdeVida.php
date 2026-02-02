<?php
class FormasdeVida extends EntidadEstelar{
    private $dieta;

    function __construct($ID, $nombre,$planetaOrigen,$nivelEstabilidad, $dieta){ //Nota: al padre le ponemos $raza, porque el parent::__construct, 
        parent::__construct($ID, $nombre,$planetaOrigen,$nivelEstabilidad);
        $this->dieta = $dieta;
    }
    function getDieta(){return $this->dieta;}
}