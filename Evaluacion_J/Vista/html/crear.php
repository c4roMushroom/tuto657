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
            <li"><a id="btncr" href="index.php?accion=crear">Crear auto</a> </li>
            <li><a id="btncon" href="index.php?accion=consultar">Consultar auto</a> </li>
            <!-- <li><a id="btnedit" href="index.php?accion=editar">Editar auto</a> </li> -->
            <!-- <li><a href="index.php?accion=cancelar">Cancelar auto</a> </li>
            <li><a href="index.php?accion=editar">Editar auto</a> </li> -->
        </ul>
        <div id="contenido">
            <h2>Insertar Automovil</h2>
            <form action="index.php?accion=guardarAuto" id="frmcrear" method="post">
                <table id="tcreate">
                    <tr>
                        <td>Placa:</td>
                        <td><input type="text" name="placa" id="placa"></td>
                    </tr>
                    <tr>
                        <td>Marca:</td>
                        <td><input type="text" name="marca" id="marca"></td>
                    </tr>
                    <tr>
                        <td>Modelo:</td>
                        <td><input type="number" name="modelo" id="modelo"></td>
                    </tr>
                    <tr>
                        <td>Color:</td>
                        <td><input type="text" name="color" id="color"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="asignarEnviar" value="Enviar" id="asignarEnviar">
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td colspan="2">
                            <div id="auto"></div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <script>consultarAutomoviles();</script>
</body>

</html>