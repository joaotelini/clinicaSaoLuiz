$(document).ready(function (){
    $('a[eventclick]').click(function (){
        let id = (this).getAttribute('data-id');

        $.ajax({
            url: '../Controller/listar-agendamento.php',
            method: 'POST',
            data: {id: id},
            dataType: 'json'
        }).done(function (result){
            console.log(result);
        });
    });
});