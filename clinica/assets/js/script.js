function teste(idD) {
    $.ajax({
        url: '../Controller/query.php',
        method: 'POST',
        data: {departamento: idD},
        dataType: 'json'
    }).done(function(result){

        if (result.length > 0) {
            // console.log(result);
            $('#selectEspecialista').empty();
            for (let i = 0; i < result.length; i++) {
                
                $('#selectEspecialista').prepend("<option value='"+ result[i].id_especialista +"'>"+ result[i].nome_completo +"</option");
            }

        } else {
            $('#selectEspecialista').empty();
            // console.log(result);
        }

    });
  }