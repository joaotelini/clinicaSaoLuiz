$(document).ready(function (){
    // $('a[eventclick]').click(function (){
    //     let id = (this).getAttribute('data-id');

    //     listarConsulta(id);
        
    // });

    let statusModal = document.getElementById('status-modal')
    statusModal.addEventListener('show.bs.modal', function (event) {
        let button = event.relatedTarget
        let recipientStatus = button.getAttribute('data-bs-status');
        let id = button.getAttribute('data-bs-id-consulta');
        let data = $('#data-consulta').val();

        let status = $(this);

        status.find('#select-status').val(recipientStatus);

        $('#confirmStatus').one("click", function (){
            let status = $('#select-status').val();
            $.ajax({
                url: '../Controller/mudar-status.php',
                method: 'POST',
                data: {id: id, status: status},
                dataType: 'json'
            }).done(function (result){
                $('#status-modal').modal('hide');
                listarConsulta(data);
                console.log(recipientStatus);

            })
        });
    });

    $('#data-consulta').change(function (){
        let data = $(this).val();
        listarConsulta(data);
    })
    
    function listarConsulta(data){
        $.ajax({
            url: '../Controller/listar-agendamento.php',
            method: 'POST',
            data: {data: data},
            dataType: 'json'
        }).done(function (result){
            $('#table-agend').empty();
            // console.log(result);
            let totCon = result.length;
            let totFaltas = 0;
            let totReal = 0;
            let totAtend = 0;
            let totEspera = 0;

            for (let i = 0; i < result.length; i++){

                let date = changeDate(result[i].data_consulta);

                $('#table-agend').prepend('<tr> <td> '+ result[i].nome_especialista +' </td> <td>'+ result[i].nome_servico +'</td> <td>'+ result[i].nome_paciente +'</td> <td>'+ date +'; '+ result[i].hora_inicio +'</td> <td>R$'+ result[i].valor +',00</td> <td>'+ result[i].status_consulta +'</td> <td><a class="btn btn-info" data-bs-status="'+ result[i].status_consulta +'" data-bs-id-consulta="'+ result[i].id_consulta +'" data-bs-toggle="modal" data-bs-target="#status-modal" data-bs-departamento="'+ result[i].id_departamento +'" data-bs-whatever="@mdo">Mudar Status</a></td> </tr>');

                
                if (result[i].status_consulta == "Faltou"){
                    totFaltas = totFaltas + 1;
                }
                if (result[i].status_consulta == "Realizada"){
                    totReal = totReal + 1;
                }
                if (result[i].status_consulta == "Em Atendimento"){
                    totAtend = totAtend + 1;
                }
                if (result[i].status_consulta == "Espera"){
                    totEspera = totEspera + 1;
                }
                $('#con-hoje').empty();
                $('#con-hoje').prepend('<p>'+ totCon +'</p><h3>Número de Consultas</h3>');
                $('#con-real').empty();
                $('#con-real').prepend('<p>'+ totReal +'</p><h3>Realizadas</h3>');
                $('#con-atend').empty();
                $('#con-atend').prepend('<p>'+ totAtend +'</p><h3>Em Atendimento</h3>');
                $('#falta').empty();
                $('#falta').prepend('<p>'+ totFaltas +'</p><h3>Faltas</h3>');
                $('#con-espera').empty();
                $('#con-espera').prepend('<p>'+ totEspera +'</p><h3>Em Espera</h3>');
                

            }
        }); 
    }

    function changeDate(date){
        let data_americana = date;
        let data_brasileira = data_americana.split('-').reverse().join('/');

        return data_brasileira;
    }

    listarConsulta();

});