var nombres = [];

$(function () {

    // getNombresPacientes();

    $( function() {
        var availableTags = [
          "ActionScript",
          "AppleScript",
          "Asp",
          "BASIC",
          "C",
          "C++",
          "Clojure",
          "COBOL",
          "ColdFusion",
          "Erlang",
          "Fortran",
          "Groovy",
          "Haskell",
          "Java",
          "JavaScript",
          "Lisp",
          "Perl",
          "PHP",
          "Python",
          "Ruby",
          "Scala",
          "Scheme"
        ];
        $( "#pacientesFiltro" ).autocomplete({
          source: availableTags
        });
      } );

    // $("#pacientesFiltro").autocomplete({
    //     source: pacientesList,
    //     focus: function (event, ui) {
    //         $("#pacientesFiltro").val(ui.item.Nombres);
    //         return false;
    //     },
    //     select: function (event, ui) {
    //         $("#pacientesFiltro").val(ui.item.Nombres);
    //         $("#pacienteId").val(ui.item.ID_Paciente);
    //         return false;
    //     }
    // })
    // .autocomplete("instance")._renderItem = function(ul, item){
    //     console.log(item);
    //     return $("<li>").append(" <div>" + item.Nombres + "</div>").appendTo("ul");
    // };
});

function getNombresPacientes(){
     for (let index = 0; index < pacientes.length; index++) {
         console.log(pacientes[index]);
         nombres.push(pacientes[index].Nombres);        
     }
     console.log(nombres);
    // pacientesList.array.forEach(element => {
    //     nombres.push(element.Nombres);
    // });
}