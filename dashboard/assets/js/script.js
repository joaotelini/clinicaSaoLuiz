$(document).ready(function() {

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
