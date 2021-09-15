<?php

    include_once '..\Model\departamento.php';
    include_once '..\Conexao\departamentoDAO.php';

    if (isset($_POST['action'])) {

        session_start();
        
        $nome = $_POST['nome'];
        
        if (empty($_POST['nome'])) {

            $_SESSION['vazio_nome'] = "O Campo Nome é Obrigatório";
            header('location: ../dashboard/cadastroDepartamento.php');

        } else {
            $_SESSION['value_nome'] = $_POST['nome'];
        }

        $descricao = $_POST['descricao'];

        if (empty($_POST['descricao'])) {

            $_SESSION['vazio_descricao'] = "O Campo Descrição é Obrigatório";
            header('location: ../dashboard/cadastroDepartamento.php');

        } else {
            $_SESSION['value_descricao'] = $_POST['descricao'];
        }

        $dep = new Departamento($nome, $descricao);

        $depDao = new DepartamentoDao();


        if ($depDao->Inserir($dep) == true) {
            $_SESSION['cadastro_sucesso'] = "Departamento Cadastrado com Sucesso!";
            header('location: ../dashboard/cadastroDepartamento.php');
        }


    }
        
?>