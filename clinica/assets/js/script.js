function verDepartamento(idD) {
    $.ajax({
        url: '../Controller/query.php',
        method: 'POST',
        data: {departamento: idD},
        dataType: 'json'
    }).done(function(result){

        if (result) {

            $('#selectEspecialista').empty();
            for (let i = 0; i < result.length; i++) {
                
                $('#selectEspecialista').prepend("<option value='"+ result[i].id_especialista +"'>"+ result[i].nome_completo +"</option");
            }

        } else {
            $('#selectEspecialista').empty();
        }

    });
  }

function verServico(idD){
    console.log("funcionando");
    $.ajax({
        url: '../Controller/verServico.php',
        method: 'POST',
        data: {departamento: idD},
        dataType: 'json'
    }).done(function(result){

        if (result.length > 0) {

            $('#selectServico').empty();
            for (let i = 0; i < result.length; i++) {
                $('#selectServico').prepend("<option value='"+ result[i].id_servico +"'>"+ result[i].nome_servico +"</option>");
            }

        } else {
            $('#selectServico').empty();
        }

    });
}

// function verEspecialista(idE) {
//     $.ajax({
//         url: '../Controller/verEspecialista.php',
//         method: 'POST',
//         data: {especialista: idE},
//         dataType: 'json'
//     }).done(function(result) {
//         console.log(result);
//     }
// }