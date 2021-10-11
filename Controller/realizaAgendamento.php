<?php

    include_once '../Model/consulta.php';
    include_once '../Conexao/conexao.php';
    session_start();

    $paciente = $_POST['cpf'];

    if (empty($paciente)) {
        $_SESSION['vazio_cpf'] = "O campo CPF é obrigatório";
        header('location: ../clinica/agendamento.php');
    }
    $departamento = $_POST['departamento'];
    $especialista = $_POST['especialista'];
    $data = $_POST['data'];
    $horarioInicio = $_POST['horario'];

    // echo "Funcionando";

    