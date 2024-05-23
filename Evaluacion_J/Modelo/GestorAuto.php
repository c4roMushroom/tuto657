<?php
class GestorAuto
{
    public function agregarAuto(Automovil $automovil)
    {
        $conexion = new Conexion();
        $conexion->abrir();
        $placa = $automovil->obtenerPlaca();
        $marca = $automovil->obtenerMarca();
        $modelo = $automovil->obtenerModelo();
        $color = $automovil->obtenerColor();
        $sql = "INSERT INTO automovil VALUES ('$placa', '$marca', '$modelo', '$color')";
        $conexion->consulta($sql);
        $filasAfectadas = $conexion->obtenerFilasAfectadas();
        $conexion->cerrar();
        return $filasAfectadas;
    }

    public function consultarAutoss()
    {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM automovil";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function consultarAutosPorPlaca($plac)
    {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM automovil "
            . "WHERE autPlaca = '$plac' ";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function BorrarAuto($plac)
    {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "DELETE FROM automovil "
            . "WHERE autPlaca = '$plac' ";
        $conexion->consulta($sql);
        $filasAfectadas = $conexion->obtenerFilasAfectadas();
        $conexion->cerrar();
        return $filasAfectadas;
    }

    public function editarAuto($plac, $nuevo_color)
    {
        $conexion = new Conexion();
        $conexion->abrir();
        $sqlVerificar = "SELECT * FROM automovil "
            . "WHERE autPlaca = '$plac' ";
        $conexion->consulta($sqlVerificar);

        if ($conexion->obtenerFilasAfectadas() > 0) {
            $sql = "UPDATE automovil SET autColor = '$nuevo_color'"
                . "WHERE autPlaca = '$plac'";
            $conexion->consulta($sql);
            $filasAfectadas = $conexion->obtenerFilasAfectadas();
        } else {
            $filasAfectadas = 0;
        }
        $conexion->cerrar();
        return $filasAfectadas;
    }
}
