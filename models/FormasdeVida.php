<?php
class FormasdeVida extends EntidadEstelar implements iInteractuable{ 
    private $dieta;

    function __construct($ID, $nombre,$planetaOrigen,$nivelEstabilidad, $dieta){ //Nota: al padre le ponemos $raza, porque el parent::__construct, 
        parent::__construct($ID, $nombre,$planetaOrigen,$nivelEstabilidad);
        $this->dieta = $dieta;
    }
    function getDieta(){return $this->dieta;}
    function setDieta($dieta){return $this->dieta = $dieta;} 
    function reaccionar(){echo "Emite un pulso electromagnético";}
    }