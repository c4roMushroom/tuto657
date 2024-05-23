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
        <h2>Consultar Cita</h2>
            <form action="" method="post" id="frmconsultar">
                <table>
                    <tr>
                        <td>Placa del Automovil:</td>
                        <td><input type="text" name="consultarPlaca" id="consultarPlaca" class="consultar"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="button" name="consultarPlaca" value="Consultar" id="consultarPlaca" class="consul" onclick="consultarAutos()"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="auto2"></div>
                        </td>
                    </tr>
                    
                </table>
            </form>
        </div>
    </div>
 </body>
</html>