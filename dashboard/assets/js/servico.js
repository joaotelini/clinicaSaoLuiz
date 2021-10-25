$(document).ready(function(){
    console.log("hello world");

    function validaCampos(nome, dep, dura, val, desc){
        if (nome == "" || dep == "" || dura == "" || val == "" || desc == ""){
            $('#message-result').empty();
            $('#message-result').prepend('<div class="alert alert-danger" role="alert">Preencha todos os campos!</div>');
            return false;
        } else {
            $('#message-result').empty();
            return true;
        }
    }

    $('#btn-cad-servico').click(function (){
        let nome = $('#nome').val();
        let dep = $('#departamento').val();
        let dura = $('#duracao').val();
        let val = $('#valor').val();
        let desc = $('#descricao').val();

        let res = validaCampos(nome, dep, dura, val, desc);
        if (res) {
            $.ajax({
                url: '../Controller/cadastrar-servico.php',
                method: 'POST',
                data: {nome: nome, departamento: dep, duracao: dura, valor: val, descricao: desc},
                dataType: 'json'
            }).done(function (result){
                if (result == "Erro! verifique os campos"){
                    $('#message-result').empty();
                    $('#message-result').prepend('<div class="alert alert-danger" role="alert">'+ result +'</div>');
                } else {
                    $('#message-success').empty();
                    $('#message-success').prepend('<div class="alert alert-success" role="alert">'+ result +'</div>');
                    $("#form-cad-servico").trigger("reset");
                    $("#insert-ser-modal").modal('hide');
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