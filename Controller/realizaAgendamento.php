<?php

    include_once '../Model/consulta.php';
    include_once '../Conexao/conexao.php';
    include_once '../Conexao/pacienteDAO.php';
    include_once '../Conexao/consultaDAO.php';
    include_once '../Conexao/servicoDAO.php';

    $cpf = preg_replace( '/[^0-9]/is', '', $_POST['cpf']);
    $departamento = $_POST['departamento'];
    $especialista = $_POST['especialista'];
    $servico = $_POST['servico'];
    $data = $_POST['data'];
    $horarioInicio = $_POST['horario'];

    $serDao = new ServicoDAO();
    $serInfo = $serDao->pegaDuracao($servico);

    foreach($serInfo as $ser){
        $timestamp = strtotime($horarioInicio) + 60*$ser['duracao'];
        $horarioFim = strftime('%H:%M:%S', $timestamp);
    }

    $pacDao = new PacienteDAO();
    $pacInfo = $pacDao->verificaCpf($cpf);
    
    foreach($pacInfo as $pac){
        $paciente = $pac['id_paciente'];
    }


    $con = new Consulta($servico, $horarioInicio, $horarioFim, $especialista, $paciente, $data, $departamento);
    $conDao = new ConsultaDAO();

    $horaIn = $conDao->verificaHorario($data, $horarioInicio, $horarioFim, $especialista);

    // echo json_encode($horaIn);
    if ($paciente) {
        if ($horaIn) {
            echo json_encode($horaIn);
        } else {   
            if ($data > date('Y-m-d')){
                if ($conDao->Inserir($con) == true) {
                    echo json_encode("Consulta agendada com sucesso!");
                } else {
                    echo json_encode("Erro! Verifique se os dados foram digitados corretamente");
                }
            } else {
                echo json_encode("Data Indisponível");
            }
        }

    } else {
        echo json_encode("Cpf não cadastrado");
    }

    