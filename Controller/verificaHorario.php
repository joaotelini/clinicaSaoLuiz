<?php

    include_once '../Conexao/consultaDAO.php';

    $horario = $_POST['horario'];
    $data = $_POST['data'];

    $horaDao = new ConsultaDAO();
    $horaResult = $horaDao->verificaHorario($data, $horario);

    if ($horaResult) {
        echo json_encode($horaResult);
    } else {
        echo json_encode("Horário Disponível");
    }
