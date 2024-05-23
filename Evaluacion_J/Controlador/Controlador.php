<?php
class Controlador 
{
    public function verPagina($ruta)
    {
        require_once $ruta;
    }

    public function agregarAuto($plac, $marc, $model, $colora)
    {
        $automovil = new Automovil(
            $plac, 
            $marc, 
            $model, 
            $colora
        );
        $gestorAuto = new GestorAuto();
        $plac = $gestorAuto->agregarAuto($automovil);
        require_once 'Vista/html/crear.php';
    }

    public function consultarAutos()
    {
        $gestorAuto = new GestorAuto();
        $result = $gestorAuto->consultarAutoss();
        require_once 'Vista/html/consultarAuto.php';
    }

    public function consultarAutos2($plac)
    {
        $gestorAuto = new GestorAuto();
        $result = $gestorAuto->consultarAutosPorPlaca($plac);
        require_once 'Vista/html/consultarAuto.php';
    }

    public function cancelarAutos($plac)
    {
        $gestorAuto = new GestorAuto();
        $result = $gestorAuto->consultarAutoss($plac);
        require_once 'Vista/html/consultarAuto.php';
    }

    public function confirmarBorrarAuto($plac)
    {
        $gestorAuto = new GestorAuto();
        $registros = $gestorAuto->BorrarAuto($plac);
        if ($registros > 0) {
            echo "El auto se ha eliminado con éxito";
        } else {
            echo "Hubo un error al eliminar el auto";
        }
    }
    
    public function editarAuto($plac)
    {
        $gestorAuto = new GestorAuto();
        $result = $gestorAuto->consultarAutosPorPlaca($plac);
        require_once 'Vista/html/editar.php';
    }
}