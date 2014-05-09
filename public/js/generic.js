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

$(function(){
	$('#datepicker').datepicker({
		showOtherMonths: true,
	    selectOtherMonths: true
	});
});

$(document).on("change", "#turmaNotas", function(e) {
  //alert('aqui-1');
  // Consultar os dados como ANO,CURSO,TURMA e carregar as disciplinas da turma em uma combo.
  //console.log(e.val);
  var $res = e.val.split("|");
  $('#cursoNotas').html($res[1]);
  $('#nomeTurmaNotas').html($res[2]);

  // Buscar as disciplinas da turma
  $.ajax({
      url: 'http://localhost/public_html/sge/index.php/disciplinasturmas/getDisciplinas/'+$res[0],
      type: 'GET',
      data: '',
      dataType: 'json',
      success: function(json){
        var options = "<option value=\"\">Selecionar uma disciplina</option>";
        $.each(json, function(key, value){
          //console.log(key);
          options += '<option value="' + value.id + '|' + value.id_turma + '">' + value.nome + '</option>';
        });
        $("#disciplinaNotas").html(options);
      }
    });
});

$(document).on("change", "#disciplinaNotas", function(e) {
  $("#loading").ajaxStart(function () {
    $(this).show();
  });

  $("#loading").ajaxStop(function () {
    $(this).hide();
  });
  
  // Listar todos os alunos da turma e disciplina selecionada
  var $res = e.val.split("|");
  $disciplina = $res[0];
  $turma      = $res[1];

  // Buscar os alunos
  $.ajax({
      url: 'http://localhost/public_html/sge/index.php/notasefrequencias/getNotasFrequencias/'+$disciplina+'/'+$turma,
      type: 'GET',
      data: '',
      dataType: 'json',
      success: function(json){
        //console.log(json);
        $(".ocultar-tabela").css("display", "block");
        $("#tabela-dados tbody").html('');
        $.each(json, function(key, value){
          $("#tituloTabela").html(value.nomeDisciplina);
          $("#tabela-dados tbody").append(
            '<tr>\n' +
            '\t<td class="td-id">' + value.id + '</td>\n' +
            '\t<td>' + value.id_aluno + '</td>\n' +
            '\t<td class="td-nota">' + value.nota + '</td>\n' +
            '\t<td class="td-frequencia">' + value.frequencia + '</td>\n' +
            '</tr>\n');
        });
      }
    });
});