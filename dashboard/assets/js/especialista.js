$(document).ready(function () {

    $('#insert-especialista').click(function (){
        let nome = $('#nome-especialista').val();
        let crm = $('#conselho-regional').val();
        let cpf = $('#cpf-especialista').val();
        let email = $('#email-especialista').val();
        let telefone = $('#telefone-especialista').val();
        let departamento = $('#departamento-especialista').val();

        let res = validaCampos(nome, crm, cpf, email, telefone, departamento);
        // console.log(crm);
        if (res){
            $.ajax({
                url: '../Controller/especialistaCadastrar.php',
                method: 'POST',
                data: {nome: nome, crm: crm, cpf: cpf, email: email, telefone: telefone, departamento: departamento},
                dataType: 'json'
            }).done(function (result){
                if (result == "CPF Inválido!") {
                    $('#message_result').empty();
                    $('#message_result').prepend('<div class="alert alert-danger" role="alert">'+ result +'</div>');
                } else if (result == "Erro ao tentar cadastrar. Verifique os campos"){
                    $('#message_result').empty();
                    $('#message_result').prepend('<div class="alert alert-danger" role="alert">'+ result +'</div>');
                } else if (result == "Telefone Inválido") {
                    $('#message_result').empty();
                    $('#message_result').prepend('<div class="alert alert-danger" role="alert">'+ result +'</div>');
                } else {
                    $("#message_success").prepend("<div class='alert alert-success' role='alert'>" + result + "</div>");
                    $("#form-cad-especialista").trigger("reset");
                    $("#insert-esp-modal").modal('hide');
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

    function validaCampos(nome, crm, cpf, email, telefone, departamento){
        if (nome == "" || crm == "" || cpf == "" || email == "" || telefone == "" || departamento == "") {
            $('#message_result').empty();
            $('#message_result').prepend('<div class="alert alert-danger" role="alert">Preencha todos os campos!</div>');
            return false;
        } else {
            $('#message_result').empty();
            return true;
        }
    }

});