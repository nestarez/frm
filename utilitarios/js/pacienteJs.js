function getAllPacientes(){

    $.ajax("Pacientes/getAll",{
        beforeSend: load,
        success: setAllPacientes,
        type: "POST",
        dataType: "json"

    }).done(unload);
}

function setAllPacientes(data, status, jqxhr){
    console.log(data);
    pacientesList = data;
}

var delModal = function () {
    console.log("pasa");
    $("#deleteModal").callModal();
//    $('#deleteModal').modal('show'); 
};

var delForm = function (bol) {
    $("#deleteModal").modal('hide');
    if (bol) {
        data = {
            'cliente.idCliente': $("#idcliente").val()
        };
        callAjax('clienteDel', data, postDelete);
    }
};