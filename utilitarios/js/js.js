$(function () {
  $('[data-toggle="tooltip"]').tooltip();
  $("#loading-gif").hide();
});
function load(){
  $("#loading-gif").fadeIn();
}

function unload(){
  $("#loading-gif").fadeOut();
}

