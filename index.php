<?php
require_once "autoload.php";
session_start();
$controller = new LogbookController();

$accion = $_GET['action'] ?? 'index';

switch ($accion) {
    case 'crear':
        $controller->guardar();
        break;
    
    case 'editar':
        $controller->editar();
        break;
    
    case 'eliminar':
        $controller->eliminar();
        break;
    
    default:
        $controller->index();
    break;
}