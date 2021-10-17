$(document).ready(function() {

    $('a[data-confirm]').click(function(){
        let href = $(this).attr('href');
        if (!$('#confirm-delete').length){
            $('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header bg-danger text-white"><h5 class="modal-title" id="exampleModalLabel">Excluir Departamento</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Tem certeza de que deseja excluir o item selecionado?</div><div class="modal-footer"><button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button><a class="btn btn-danger" id="dataConfirmOK">Excluir</a></div></div></div></div>');
        }
        $('#dataConfirmOK').attr('href', href);
        $('#confirm-delete').modal("show");
        console.log(href);
        return false;
    });

  $("#cadDep").click(function() {
    let dep = $("#departamento").val();
    let desc = $("#descricao").val();

    let verificaCampos = validaCampos(dep, desc);

    if (verificaCampos) {
      $.ajax({
        url: "../Controller/departamentoCadastrar.php",
        method: "POST",
        data: { nome: dep, descricao: desc },
        dataType: "json"
      }).done(function(result) {
        if (result == "Departamento cadastrado com sucesso!") {
          $("#message_success").prepend(
            "<div class='alert alert-success' role='alert'>" + result + "</div>"
          );
          $("#cadDepForm").trigger("reset");
          setTimeout(() => {
            $("#message_success").fadeOut("Slow");
          }, 3000);
        }
      });
    } else {
      console.log("não funcionando");
    }
  });

  function validaCampos(dep, desc) {
    if (dep == "" || desc == "") {
      $("#message_result").empty();
      $("#message_result").prepend(
        "<div class='alert alert-danger' role='alert'>Preencha todos os campos!</div>"
      );
      return false;
    } else {
      $("#message_result").empty();
      return true;
    }
  }
});
