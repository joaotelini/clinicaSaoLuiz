<?php

    include_once '../Conexao/horarioDAO.php';
    include_once '../Model/horario.php';

    $esp = $_POST['especialista'];
    $dia = $_POST['dia_semana'];
    $comeco = $_POST['comeco_espediente'];
    $fim = $_POST['fim_espediente'];

    $hora = new Horario($esp, $dia, $comeco, $fim);
    $horaDao = new HorarioDAO();

    if ($horaDao->Inserir($hora) == true){
        echo json_encode("Horário cadastrado com sucesso!");
    } else {
        echo json_encode("Erro! Verifique os campos");
    }

?>