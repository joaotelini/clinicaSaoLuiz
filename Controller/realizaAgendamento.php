<?php

    include_once '../Model/consulta.php';
    include_once '../Conexao/conexao.php';
    include_once '../Conexao/pacienteDAO.php';

    $cpf = preg_replace( '/[^0-9]/is', '', $_POST['cpf']);
    $departamento = $_POST['departamento'];
    $especialista = $_POST['especialista'];
    $data = $_POST['data'];
    $horarioInicio = $_POST['horario'];

    $pacDao = new PacienteDAO();
    $pacInfo = $pacDao->verificaCpf($cpf);

    if ($pacInfo) {
        echo json_encode($pacInfo);
    } else {
        echo json_encode("cpf não cadastrado");
    }

    