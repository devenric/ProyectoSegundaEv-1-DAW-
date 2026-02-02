<?php
interface iGestor{
    function obtenerTodos();
    function guardar($descubrimiento);
    function eliminar($ID);
    function buscar($ID);
    function editar($ID, $nombre,$planetaOrigen,$nivelEstabilidad,$descubrimientoOption);
}