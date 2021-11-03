<?php

    include_once '../Conexao/consultaDAO.php';
    include_once '../Conexao/servicoDAO.php';

    $horario = $_POST['horario'];
    $data = $_POST['data'];
    $servico = $_POST['servico'];

    $serDao = new ServicoDAO();
    $serInfo = $serDao->pegaDuracao($servico);

    foreach($serInfo as $ser){
        $timestamp = strtotime($horario) + 60*$ser['duracao'];
        $horarioFim = strftime('%H:%M:%S', $timestamp);
    }


    $conDao = new ConsultaDAO();
    $horaResult = $conDao->verificaHorario($data, $horario, $horarioFim);

    if ($horaResult) {
        echo json_encode($horaResult);
    } else {
        echo json_encode("Horário Disponível");
    }
