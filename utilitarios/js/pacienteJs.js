$(function(){
    getAllPacientes();
});


let pacientesList;

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