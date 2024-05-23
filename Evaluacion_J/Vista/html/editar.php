<?php
$conexion=new mysqli("localhost", "root","","automoviles");
$conexion->set_charset("utf8");

$placa=$_GET["placa"];
$sql=$conexion->query("SELECT * FROM automovil WHERE autPlaca='$placa'");
?>

<!DOCTYPE html>
<html>
 <head>
    <title>Automoviles</title>
    <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
    <script type="text/javascript" src="Vista/js/script.js"></script>
    <script type="text/javascript" src="Vista/jquery/jquery-3.2.1-min.js"></script>
 </head>
 <body>
    <div id="contenedor">
        <div id="encabezado">
            <h1>CRUD de Automoviles</h1>
        </div>
        <ul id="menu">
            <li><a id="btncr" href="index.php?accion=crear">Crear auto</a> </li>
            <li><a id="btncon" href="index.php?accion=consultar">Consultar auto</a> </li>
            <!-- <li><a id="btnedit" href="index.php?accion=editar">Editar auto</a> </li> -->
            <!-- <li><a href="index.php?accion=cancelar">Cancelar auto</a> </li>
            <li><a href="index.php?accion=editar">Editar auto</a> </li> -->
        </ul>
        <div id="contenido">
            <h2>Editar Auto</h2>
            <form id="editarAuto" action="Modelo/actualizarAuto.php" method="POST">
                <?php
                 while ($datos=$sql->fetch_object()) {?>
                <table>
                    <tr>
                        <td>Placa:</td>
                        <td><input type="text" name="placa" id="placa" value="<?php echo $datos->autPlaca?>"></td>
                    </tr>
                    <tr>
                        <td>Nuevo color:</td>
                        <td><input type="text" name="nuevo_color" id="edtAuto" value="<?php echo $datos->autColor?>"></td>
                        
                    </tr>
                </table>
                
                <input type="submit" value="Editar Auto" name="editarAuto" id="edit">
                <table>
                    <tr>
                        <td colspan="2">
                            <div id="auto"></div>
                        </td>
                    </tr>
                </table>
                <?php }
                ?>
            </form>
        </div>
    </div>
 </body>
</html>