<?php
class Gestor implements iGestor{
    function __construct(){
        if (!isset($_SESSION['descubrimientos'])) {
            $_SESSION['descubrimientos'] = [];
        }
    }
    function obtenerTodos(){
return $_SESSION['descubrimientos'];
    }
    function guardar($descubrimiento){
$_SESSION['descubrimientos'][] = $descubrimiento;
    }
    function buscar($ID){
foreach ($_SESSION['descubrimientos'] as $d) {
    if ($d->getID() == $ID) {
        return $d;
    }
    return null;
}
    }
    function eliminar($ID){
        foreach ($_SESSION['descubrimientos'] as $i => $p) {
            if ($p->getID() == $ID){
                unset($_SESSION['descubrimientos'][$i]);
                $_SESSION['descubrimientos'] = array_values($_SESSION['descubrimientos']);
                return true;
            }
        }
        return false;
    }
    function editar($ID, $nombre,$planetaOrigen,$nivelEstabilidad,$descubrimientoOption){
        foreach ($_SESSION['descubrimientos'] as $p) {
            if ($p->getID() == $ID) {
                $p->setNombre($nombre);
                $p->setPlanetaOrigen($planetaOrigen);
                $p->setNivelEstabilidad($nivelEstabilidad);
                if ($p instanceof MineralRaro) {
                $p->setDureza($descubrimientoOption);}
                elseif ($p instanceof Artefacto) {$p->setAntig($descubrimientoOption);}
                return true;
            }
        }
        return false;
    }
}