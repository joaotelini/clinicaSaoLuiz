$(document).ready(function() {

    $('a[data-confirm]').click(function(){
        let id = $(this).attr('data-id');

        $('#confirm-delete').modal("show");
        $('#dataConfirmOK').click(function () {
          $.ajax({
            url: '../Controller/excluiDepartamento.php',
            method: 'POST',
            data: {id: id},
            dataType: 'json'
          }).done(function (result) {
            // console.log(result);
            if (result){

              $('#message_success').empty();
              $("#message_success").prepend("<div class='alert alert-danger' role='alert'>" + result + "</div>");
              setTimeout(() => {
                $("#message_success").fadeOut("Slow");
              }, 1500);
              setTimeout(() => {
                location.reload();
              }, 1500);
            } else {
              $('#message_success').empty();
              $("#message_success").prepend("<div class='alert alert-danger' role='alert'>Erro!, existem dados ligados a esse departamento</div>");
              setTimeout(() => {
                $("#message_success").fadeOut("Slow");
              }, 1500);
            }

          });
        });
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
          $("#message_success").prepend("<div class='alert alert-success' role='alert'>" + result + "</div>");
          $("#cadDepForm").trigger("reset");
          setTimeout(() => {
            $("#message_success").fadeOut("Slow");
          }, 1500);
          setTimeout(() => {
            location.reload();
          }, 1500);
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
