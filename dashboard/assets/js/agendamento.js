$(document).ready(function (){
    $('a[eventclick]').click(function (){
        let id = (this).getAttribute('data-id');

        $.ajax({
            url: '../Controller/listar-agendamento.php',
            method: 'POST',
            data: {id: id},
            dataType: 'json'
        }).done(function (result){
            $('#table-agend').empty();
            for (let i = 0; i < result.length; i++){

                let date = changeDate(result[i].data_consulta);

                $('#table-agend').prepend('<tr> <td> '+ result[i].nome_especialista +' </td> <td>'+ result[i].nome_servico +'</td> <td>'+ result[i].nome_paciente +'</td> <td>'+ date +'; '+ result[i].hora_inicio +'</td> <td>R$'+ result[i].valor +',00</td> <td>'+ result[i].status_consulta +'</td> <td><a class="btn btn-success" teste="mudarstatus">Mudar Status</a></td> </tr>');
            }
        });

        $('a[teste]').click(function (){
            console.log("bom dia");
        });
    });

    function changeDate(date){
        let data_americana = date;
        let data_brasileira = data_americana.split('-').reverse().join('/');

        return data_brasileira; // retorna: 30/12/2020
    }

});