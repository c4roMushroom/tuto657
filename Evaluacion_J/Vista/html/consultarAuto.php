
        <?php
            if($result->num_rows > 0){
        ?>
        <table id="autost">
            <tr id="titulos">
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Acción</th>
            </tr>
                <?php
                    while($fila=$result->fetch_object()){
                ?>
                    <tr>
                        <td id="celda"><?php echo $fila->autPlaca;?></td>
                        <td id="celda"><?php echo $fila->autMarca;?></td>
                        <td id="celda"><?php echo $fila->autModelo;?></td>
                        <td id="celda"><?php echo $fila->autColor;?></td>
                        <td id="celda">
                            <a id="boton" href="#" onclick="AutoBorrar('<?php echo $fila->autPlaca;?>')">Eliminar</a>
                            <a id="botonE" href="index.php?accion=editar&placa=<?php echo $fila->autPlaca;?>">Editar</a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="autoCan"></div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        <?php
        }
        ?>

   