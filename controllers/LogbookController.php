<?php
class LogbookController{
    private $gestor;

    function __construct(){
        $this->gestor = new Gestor();
    }
    function index(){
        $elementosPagina = 5;
        $pagActual = isset($_GET['p']) ? $_GET['p'] : 1;

        $listaTotal = $this->gestor->obtenerTodos();
        $totalElementos = count($listaTotal);

        $totalPaginas = ceil($totalElementos/$elementosPagina);
        $inicio = ($pagActual-1) * $elementosPagina;
        $descubrimientos = array_slice($listaTotal,$inicio,$elementosPagina);
        include "views/listar.php";
    }
    function guardar(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ID = $_POST['ID'];
            $nombre = $_POST['nombre'];
            $planetaOrigen = $_POST['planetaOrigen'];
            $nivelEstabilidad = $_POST['nivelEstabilidad'];
            $descubrimientoOption = $_POST['tipoDescubrimiento'];
            $descubrimiento = null;
            if ($descubrimientoOption instanceof Artefacto) {
                $antig = $descubrimientoOption;
            }
            if ($descubrimientoOption === 'artefacto') {
                $antig = $descubrimientoOption;
                $descubrimiento = new Artefacto($ID, $nombre,$planetaOrigen,$nivelEstabilidad,$antig);
            }elseif ($descubrimientoOption === 'lifeForm') {
                $dieta = $_POST['lifeForm'];
                $descubrimiento = new FormasdeVida($ID, $nombre,$planetaOrigen,$nivelEstabilidad,$dieta);
            }elseif ($descubrimientoOption === 'mineralRaro') {
                $dureza = $_POST['mineralRaro'];
                $descubrimiento = new MineralRaro($ID, $nombre,$planetaOrigen,$nivelEstabilidad,$dureza);
            }
            if ($descubrimiento !== null) {
            $reaccionar = $descubrimiento->reaccionar();
            echo "<script> alert('Hallazgo Encontrado! $reaccionar'); window.location.href='index.php'</script>";
            $this->gestor->guardar($descubrimiento);

                header("Location: index.php");
                exit;
            }else{
                echo "No válido";
                return;
            }
        }
        include "views/crear.php";
    }
    function editar(){
        $ID = $_GET['ID'] ?? null;
        if (!$ID) {
            echo "No se han encontrado resultados";
        }
        $descubrimiento = $this->gestor->buscar($ID);
        if (!$descubrimiento) {
            echo "no se han encontrado descubrimientos";
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $planetaOrigen = $_POST['planetaOrigen'];
            $nivelEstabilidad = $_POST['nivelEstabilidad'];
                if ($descubrimiento instanceof Artefacto) {
                    $antig = $_POST['artefacto'];
                    $this->gestor->editar($ID,$nombre,$planetaOrigen,$nivelEstabilidad,$antig);
                }elseif ($descubrimiento instanceof FormasdeVida) {
                    $dieta = $_POST['lifeForm'];
                    $this->gestor->editar($ID,$nombre,$planetaOrigen,$nivelEstabilidad,$dieta);
                }elseif ($descubrimiento instanceof MineralRaro) {
                    $dureza = $_POST['mineralRaro'];
                    $this->gestor->editar($ID,$nombre,$planetaOrigen,$nivelEstabilidad,$dureza);
                }
                header("Location: index.php");
                exit;
            }
        include "views/editar.php";
    }
    function eliminar(){
        $ID = $_GET['ID'] ?? null;
        $this->gestor->eliminar($ID);
        header("Location: index.php");
    }
}