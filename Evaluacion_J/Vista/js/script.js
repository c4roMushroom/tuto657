function consultarAutomoviles() { 
    var url = "index.php?accion=consultarAutomoviles";
    $("#auto").load(url, function () {
    });
}

function consultarAutos() { 
    url = "index.php?accion=consultarAutos&consultarPlaca=" +
        $("#consultarPlaca").val();
    $("#auto2").load(url);
}

function cancelarAutos() {
    url = "index.php?accion=cancelarAuto&placa=" +
        $("#placa").val();
    $("#autoCan").load(url);
}

function AutoBorrar(placa) {
    
    if (confirm("Esta seguro de eliminar el auto con placa "+placa)) {
        $.get("index.php", { accion: 'AutoBorrar', placa: placa }, function (mensaje) {
            alert(mensaje);
            consultarAutomoviles();//se vuelve a llamar la función y automaticamente muestre la actualización
        });
    }
    $("#AutoBorrar").trigger("click");
}

function editarAuto(placa) {
    var url = "index.php?accion=editar&placa=" + placa;
    $("#contenido").load(url, function () {

    });
}