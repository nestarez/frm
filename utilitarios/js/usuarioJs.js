$(function(){
    //getAllUsuario();
    
});

$("#listUsuarios").change(function(){
    getUsuario($("#listUsuarios").val());
});

function getUsuario(idUsuario){

    var param = {
        'idUsuario' :  idUsuario
    };

    $.ajax({
        url:"Usuarios/get",
        beforeSend: load,
        data: param,
        success: setDataUsuario,
        type: "POST",
        dataType: "json",
        complete: unload
    });
}
function getAllUsuario(){

    $.ajax("Usuarios/getAll",{
        beforeSend: load,
        success: setComboUsuarios,
        type: "POST",
        dataType: "json"

    }).done(unload);
}

function setDataUsuario(data, status, jqxhr){    
    $("#usuarioIn").val(data["Usuario"]);
    $("#nombreIn").val(data["Nombres"]);
    $("#apellIn").val(data["Apellido_Pat"] + " " + data["Apellido_Mat"]);
    $("#cargoIn").val(data["Cargo"]);
}
function setComboUsuarios(data, status, jqxhr){
    var options = "";
    data.forEach(elemento => {
        options += `<option value='` + elemento["ID_Usuario"] + `'>` + elemento["Usuario"] + `</option>`;
       
    });
    $("#listUsuarios").html(options);
}

