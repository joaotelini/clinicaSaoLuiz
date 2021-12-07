function listarDepartamento(idD) {
    $.ajax({
        url: '../Controller/query.php',
        method: 'POST',
        data: {departamento: idD},
        dataType: 'json'
    }).done(function(result){

        if (result) {

            $('#selectEspecialista').empty();
            $('#selectEspecialista').prepend("<option value='0'></option");
            for (let i = 0; i < result.length; i++) {
                
                $('#selectEspecialista').prepend("<option value='"+ result[i].id_especialista +"'>"+ result[i].nome_especialista +"</option");
            }

        } else {
            $('#selectEspecialista').empty();
        }

    });
}

function listarServico(idD){
    $.ajax({
        url: '../Controller/verServico.php',
        method: 'POST',
        data: {departamento: idD},
        dataType: 'json'
    }).done(function(result){

        if (result) {

            $('#selectServico').empty();
            $('#selectServico').prepend("<option value='0'></option");
            for (let i = 0; i < result.length; i++) {
                $('#selectServico').prepend("<option value='"+ result[i].id_servico +"'>"+ result[i].nome_servico +" -    valor: R$"+ result[i].valor +",00</option>");
            }

        } else {
            $('#selectServico').empty();
        }

    });

}


