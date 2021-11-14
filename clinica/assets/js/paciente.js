$(document).ready(function (){

    $('#btn-cadastro-paciente').click(function (){
        let nome = $('#nome').val();
        let cpf = $('#cpf').val();
        let email = $('#email').val();
        let senha = $('#senha').val();
        let telefone = $('#telefone').val();
        let rg = $('#rg').val();
        let data = $('#data').val();
        let cep = $('#cep').val();
        let logradouro = $('#logradouro').val();
        let numero = $('#numero').val();
        let sexo = $('#sexo').val();

        let res = verificaCampos(nome, cpf, email, senha, telefone, rg, data, cep, logradouro, numero, sexo);
        if (res){
            $.ajax({
                url: '../Controller/cadastrar-paciente.php',
                method: 'POST',
                data: {nome: nome, cpf: cpf, email: email, senha: senha, telefone: telefone, rg: rg, data: data, cep: cep, logradouro: logradouro, numero: numero, sexo: sexo},
                dataType: 'json'
            }).done(function (result){
                if (result == "Paciente cadastrado com successo"){
                    $('#message-result').empty();
                    $('#message-result').prepend('<div class="alert alert-success" role="alert">Você foi cadastrado com sucesso</div>');
                    $("#form-cad-paciente").trigger("reset");
                    window.location.href = "#main";

                    setTimeout(() => {
                        $("#message-result").fadeOut("Slow");
                    }, 1500);
                    setTimeout(() => {
                        location.reload();
                    }, 1500);
                } else {
                    $('#message-result').empty();
                    $('#message-result').prepend('<div class="alert alert-danger" role="alert">'+ result +'</div>');
                    window.location.href = "#main";

                }
            })
        }
    })

    function verificaCampos(nome, cpf, email, senha, telefone, rg, data, cep, logradouro, numero, sexo){
        if (nome == "" || cpf == "" || email == "" || senha == "" || telefone == "" || rg == "" || data == "" || cep == "" || logradouro == "" || numero == "" || sexo == ""){
            $('#message-result').empty();
            $('#message-result').prepend('<div mt-2 class="alert alert-danger" role="alert"> Preencha todos os campos </div>')
            window.location.href = "#main";
            return false;
        } else {
            $('#message-result').empty();
            return true;
        }
    }
});