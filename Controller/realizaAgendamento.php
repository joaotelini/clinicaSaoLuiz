<?php

    include_once '../Model/consulta.php';
    include_once '../Conexao/conexao.php';
    include_once '../Conexao/pacienteDAO.php';
    include_once '../Conexao/consultaDAO.php';

    $cpf = preg_replace( '/[^0-9]/is', '', $_POST['cpf']);
    $departamento = $_POST['departamento'];
    $especialista = $_POST['especialista'];
    $servico = $_POST['servico'];
    $data = $_POST['data'];
    $horarioInicio = $_POST['horario'];

    $timestamp = strtotime($horarioInicio) + 60*15;
    $horarioFim = strftime('%H:%M:%S', $timestamp);

    $pacDao = new PacienteDAO();
    $pacInfo = $pacDao->verificaCpf($cpf);


    if ($pacInfo) {

        foreach($pacInfo as $pac){
            $paciente = $pac['id_paciente'];
        }

        $con = new Consulta($servico, $horarioInicio, $horarioFim, $especialista, $paciente, $data, $departamento);
        $conDao = new ConsultaDAO();

        // echo json_encode($con->getIdDepartamento());
        if ($conDao->Inserir($con) == true) {
            echo json_encode("Consulta agendada com sucesso!");
        } else {
            echo json_encode("Erro! Verifique se os dados foram digitados corretament");
        }

    } else {
        echo json_encode("cpf não cadastrado");
    }

    