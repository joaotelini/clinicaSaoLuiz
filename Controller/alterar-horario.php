<?php

    include_once '../Conexao/horarioDAO.php';

    $esp = $_POST['especialista'];
    $dia = $_POST['dia_semana'];
    $comeco = $_POST['comeco'];
    $fim = $_POST['fim'];
    $id = $_POST['id'];

    $horaDao = new HorarioDAO();

    $res = $horaDao->Alterar($esp, $dia, $comeco, $fim, $id);
    // echo json_encode($id);
    if ($res){
        echo json_encode("Horário alterado com sucesso");
    } else {
        echo json_encode("Erro! Verifique os campos");
    }


?>