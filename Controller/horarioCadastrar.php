<?php

    include_once '../Model/horario.php';
    include_once '../Conexao/horarioDAO.php';

    if (isset($_POST['action'])) {

        session_start();

        $id_especialista = $_POST['especialista'];

        if (empty($_POST['especialista'])) {

            $_SESSION['vazio_especielista'] = "O Campo Especialista é Obrigatório";
            header('location: ../dashboard/cadastroHorario.php');

        } else {
            $_SESSION['value_especialista'] = $_POST['especialista'];
        }

        $diaSemana = $_POST['diaSemana'];

        if (empty($_POST['disSemana'])) {

            $_SESSION['vazio_diaSemana'] = "O Campo Dia da Semana é Obrigatório";
            header('location: ../dashboard/cadastroHorario.php');

        } else {
            $_SESSION['value_diaSemana'] = $_POST['diaSemana'];
        }

        $comecoEspeciente = $_POST['comecoEspediente'];

        if (empty($_POST['comecoEspediente'])) {

            $_SESSION['vazio_comecoEspediente'] = "O Campo Começo de Espediente é Obrigatório";
            header('location: ../dashboard/cadastroHorario.php');

        } else {
            $_SESSION['value_comecoEspediente'] = $_POST['comecoEspediente'];
        }

        $fimEspediente = $_POST['fimEspediente'];

        if (empty($_POST['fimEspediente'])) {

            $_SESSION['vazio_fimEspediente'] = "O Campo Fim de Espediente é Obrigatório";
            header('location: ../dashboard/cadastroHorario.php');

        } else {
            $_SESSION['value_fimEspediente'] = $_POST['fimEspediente'];
        }

        $hor = new Horario($id_especialista, $diaSemana, $comecoEspeciente, $fimEspediente);
        $horDao = new HorarioDAO();

        if ($horDao->Inserir($hor)) {
            echo "Horário cadastrado com sucesso!";
        } else {
            echo "Erro!";
        }

        echo $diaSemana;
        // print_r($hor);

    }

?>