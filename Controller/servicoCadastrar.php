<?php

    include_once '../Model/servico.php';
    include_once '../Conexao/servicoDAO.php';

    if (isset($_POST['action'])) {

        session_start();

        $nome = $_POST['nome'];

        if (empty($nome)) {

            $_SESSION['vazio_nome'] = "O Campo Nome é Obrigatório";
            header('location: ../dashboard/cadastroServico.php');

        } else {
            $_SESSION['value_nome'] = $_POST['nome'];
        }

        $duracao = $_POST['duracao'];

        if (empty($duracao)) {

            $_SESSION['vazio_duracao'] = "O Campo Duração é Obrigatório";
            header('location: ../dashboard/cadastroServico.php');

        } else {
            $_SESSION['value_duracao'] = $_POST['duracao'];
        }

        $valor = $_POST['valor'];

        if (empty($valor)) {

            $_SESSION['vazio_valor'] = "O Campo Valor é Obrigatório";
            header('location: ../dashboard/cadastroServico.php');

        } else {
            $_SESSION['value_valor'] = $_POST['valor'];
        }

        $departamento = $_POST['departamento'];

        if (empty($departamento)) {

            $_SESSION['vazio_departamento'] = "O Campo Departamento é Obrigatório";
            header('location: ../dashboard/cadastroServico.php');

        } else {
            $_SESSION['value_departamento'] = $_POST['departamento'];
        }

        $descricao = $_POST['descricao'];

        if (empty($descricao)) {

            $_SESSION['vazio_descricao'] = "O Campo Descrição é Obrigatório";
            header('location: ../dashboard/cadastroServico.php');

        } else {
            $_SESSION['value_descricao'] = $_POST['descricao'];
        }

        $ser = new Servico($departamento, $nome, $descricao, $valor, $duracao);
        $serDao = new ServicoDAO();

        if ($serDao->Inserir($ser) == true) {
            $_SESSION['cadastro_sucesso'] = "Serviço cadastrado com sucesso!";
            header('location: ../dashboard/cadastroServico.php');
        } 

    }

?>