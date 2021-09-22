<?php

    include_once '../Model/horario.php';
    include_once '../Conexao/horarioDAO.php';

    if (isset($_POST['action'])) {

        $id_especialista = $_POST['especialista'];
        $diaSemana = $_POST['diaSemana'];
        $comecoEspeciente = $_POST['comecoEspediente'];
        $fimEspediente = $_POST['fimEspediente'];

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