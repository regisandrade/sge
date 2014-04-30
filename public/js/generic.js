/*$("#myModal").on("show", function() {    // wire up the OK button to dismiss the modal when shown
    $("#myModal a.btn").on("click", function(e) {
        console.log("button pressed");   // just as an example...
        $("#myModal").modal('hide');     // dismiss the dialog
    });
});

$("#myModal").on("hide", function() {    // remove the event listeners when the dialog is dismissed
    $("#myModal a.btn").off("click");
});

$("#myModal").on("hidden", function() {  // remove the actual elements from the DOM when fully hidden
    $("#myModal").remove();
});

$("#myModal").modal({                    // wire up the actual modal functionality and show the dialog
  "backdrop"  : "static",
  "keyboard"  : true,
  "show"      : true                     // ensure the modal is shown immediately
});*/

$(document).on("click", ".confirma", function(e) {
    bootbox.confirm("<h5>Excluir Registro</h5><hr><br><strong>Atenção</strong><br>Este item será excluído, deseja continuar?","Não","Sim", function(result) {
		if (result) {
			//console.log($('.confirma').attr('caminho'));
			window.location = $('.confirma').attr('caminho');
		}
    });
});

$(document).on("click", ".btnVoltar", function(e) {
	window.location = $('.btnVoltar').attr('caminho');
});

$('.datepicker').datepicker({
    format: "dd/mm/yyyy",
    language: "pt-BR",
    calendarWeeks: true,
    autoclose: true,
    todayHighlight: true
});