$(function () {
  $('[data-toggle="tooltip"]').tooltip();
  $("#loading-gif").hide();
});
function load(){
  $("#loading-gif").fadeIn();
}

function unload( data, textStatus, jqXHR ){
  $("#loading-gif").fadeOut();
}

