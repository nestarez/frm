$(function(){
    //getAllUsuario();
    
});

$("#listUsuarios").change(function(){
    getUsuario($("#listUsuarios").val());
});

function getUsuario($idUsuario){

    $.ajax("Usuarios/get",{
        beforeSend: load,
        data: $idUsuario,
        success: setDataUsuario,
        type: "POST",
        dataType: "json"

    }).done(unload);
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
    console.log(data);
}
function setComboUsuarios(data, status, jqxhr){
    var options = "";
    console.log(data.data);
    data.data.forEach(elemento => {
        options += `<option value='` + elemento["ID_Usuario"] + `'>` + elemento["Usuario"] + `</option>`;
       
    });
    $("#listUsuarios").html(options);
}

