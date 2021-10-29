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
                console.log(result);
            })
        }
        
    });
});