$(document).ready(function (){
    function validaCampos(esp, dia, comeco, fim){
        if (esp == "" || dia == "" || comeco == "" || fim == ""){
            $('#message-result').empty();
            $('#message-result').prepend('<div class="alert alert-danger" role="alert">Preencha todos os campos!</div>');
            return false;
        } else {
            $('#message-result').empty();
            return true;
        }
    }

    $('#btn-cad-horario').click(function (){
        let esp = $('#especialista').val();
        let dia = $('#dia-semana').val();
        let comeco = $('#comeco-espediente').val();
        let fim = $('#fim-espediente').val();

        let res = validaCampos(esp, dia, comeco, fim);
        console.log(res);
        if (res){
            $.ajax({
                url: '../Controller/cadastrar-horario.php',
                method: 'POST',
                data: {especialista: esp, dia_semana: dia, comeco_espediente: comeco, fim_espediente: fim},
                dataType: 'json'
            }).done(function (result){
                if (result == "Erro! verifique os campos"){
                    $('#message-result').empty();
                    $('#message-result').prepend('<div class="alert alert-danger" role="alert">'+ result +'</div>');
                } else {
                    $('#message-success').empty();
                    $('#message-success').prepend('<div class="alert alert-success" role="alert">'+ result +'</div>');
                    $("#form-cad-horario").trigger("reset");
                    $("#cad-hora-modal").modal('hide');
                    setTimeout(() => {
                        $("#message-success").fadeOut("Slow");
                    }, 1500);
                    setTimeout(() => {
                        location.reload();
                    }, 1500);
                }
            })
        }
        
    });

    $('#btn-delete').click(function (){
        let id = $(this).attr('data-id');
        
        $('#deleteModal').modal('show');
        $('#confirm-delete').click(function (){
            $.ajax({
                url: '../Controller/excluir-horario.php',
                method: 'POST',
                data: {id: id},
                dataType: 'json'
            }).done(function (result){
                if (result){
                    $('#message-success').empty();
                    $("#message-success").prepend("<div class='alert alert-danger' role='alert'>Horário excluido com sucesso!</div>");
                    setTimeout(() => {
                      $("#message-success").fadeOut("Slow");
                    }, 1500);
                    setTimeout(() => {
                      location.reload();
                    }, 1500); 
                  } else {
                    $('#message-success').empty();
                    $("#message-success").prepend("<div class='alert alert-danger' role='alert'>Erro!, existem dados ligados a esse horário</div>");
                    setTimeout(() => {
                      $("#message-success").fadeOut("Slow");
                    }, 1500);
                  }
            })
        });
    });

    let updateModal = document.getElementById('updateModal')
      updateModal.addEventListener('show.bs.modal', function (event) {
      let button = event.relatedTarget
      let recipientEspecialista = button.getAttribute('data-bs-especialista');
      let recipientDia = button.getAttribute('data-bs-dia');
      let recipientComeco = button.getAttribute('data-bs-comeco');
      let recipientFim = button.getAttribute('data-bs-fim');
      let id = button.getAttribute('data-bs-id');

      let update = $(this);

      update.find('#recipient-especialista').val(recipientEspecialista);
      update.find('#recipient-dia').val(recipientDia);
      update.find('#recipient-comeco').val(recipientComeco);
      update.find('#recipient-fim').val(recipientFim);

      $('#update-hora-confirm').click(function (){
        let esp = $('#recipient-especialista').val();
        let dia = $('#recipient-dia').val();
        let comeco = $('#recipient-comeco').val();
        let fim = $('#recipient-fim').val();

        let res = validaCamposUpdate(esp, dia, comeco, fim);

        if (res){
          $.ajax({
            url: '../Controller/alterar-horario.php',
            method: 'POST',
            data: {id: id, especialista: esp, dia_semana: dia, comeco: comeco, fim: fim},
            dataType: 'json'
          }).done(function (result){
            console.log(result);
            if (result == "Erro! Verifique os campos"){
              $('#message-result-update').empty();
              $('#message-result-update').prepend('<div class="alert alert-danger" role="alert">'+ result +'</div>');
            } else {
              $('#updateModal').modal('hide');
              $('#message-success').empty();
              $("#message-success").prepend("<div class='alert alert-success' role='alert'>"+ result +"</div>");
              setTimeout(() => {
                $("#message-success").fadeOut("Slow");
              }, 1500);
              setTimeout(() => {
                location.reload();
              }, 1500);
            }
          });
        }
      });
    });

    function validaCamposUpdate(esp, dia, comeco, fim){
        if (esp == "" || dia == "" || comeco == "" || fim == "" || esp == 0 || dia == 0){
            $('#message-result-update').empty();
            $('#message-result-update').prepend('<div class="alert alert-danger" role="alert">Preencha todos os campos!</div>');
            return false;
        } else {
            $('#message-result-update').empty();
            return true;
        }
    }
});