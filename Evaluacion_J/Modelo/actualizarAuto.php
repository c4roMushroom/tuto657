<?php
require_once 'Conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["placa"]) && isset($_POST["nuevo_color"])) {
        $placa = $_POST["placa"];
        $nuevo_color = $_POST["nuevo_color"];

        require_once 'GestorAuto.php';
        $gestorAuto = new GestorAuto();
        $filasAfectadas = $gestorAuto->editarAuto($placa, $nuevo_color);

        if ($filasAfectadas > 0) {
            header("Location:../index.php");
            exit();
        }
    }
}
?>
