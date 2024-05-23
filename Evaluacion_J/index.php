<?php
require_once 'Controlador/Controlador.php';
require_once 'Modelo/Automovil.php';
require_once 'Modelo/GestorAuto.php';
require_once 'Modelo/Conexion.php';
$controlador = new Controlador();

if (isset($_GET["accion"])) {
    if ($_GET["accion"] == "crear") {
        $controlador->verPagina('Vista/html/crear.php');
    } elseif ($_GET["accion"] == "guardarAuto") {
        $controlador->agregarAuto(
            $_POST["placa"],
            $_POST["marca"],
            $_POST["modelo"],
            $_POST["color"]
        );
    } elseif ($_GET["accion"] == "consultarAutomoviles") {
        $controlador->consultarAutos(); //Para que muestre todos los autos de la tabla a la hora de insertar uno nuevo
    } elseif ($_GET["accion"] == "consultar") {
        $controlador->verPagina('Vista/html/consultar.php');
    } elseif ($_GET["accion"] == "consultarAutos") {
        $controlador->consultarAutos2($_GET["consultarPlaca"]); //muestre la info de un solo auto por su placa 
    } elseif ($_GET["accion"] == "AutoBorrar") {
        $controlador->confirmarBorrarAuto($_GET["placa"]);
    } elseif($_GET["accion"] == "cancelarAuto"){
        $controlador->cancelarAutos($_GET["placa"]);
    } if ($_GET["accion"] == "editar") {
        $controlador->verPagina('Vista/html/editar.php');
    } elseif($_GET["accion"] == "editar"){
        $controlador->editarAuto($_GET["placa"]);
    }
} else {
    $controlador->verPagina('Vista/html/crear.php');
}