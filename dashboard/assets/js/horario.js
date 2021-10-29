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
});