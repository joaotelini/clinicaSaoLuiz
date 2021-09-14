<?php

    include_once '.\validacoes.php';
    include_once '..\Conexao\especialistaDAO.php';
    include_once '..\Model\especialista.php';

    session_start();

    if (isset($_POST['action'])) {

        $nome = $_POST['nome'];

        if (empty($_POST['nome'])) {

            $_SESSION['vazio_nome'] = "O Campo Nome é Obrigatório!";
            header('location: ../dashboard/cadastroEspecialista.php');

        } else {
            $_SESSION['value_nome'] = $_POST['nome'];
        }

        $conselhoRegional = $_POST['cr'];

        if (empty($_POST['cr'])) {

            $_SESSION['vazio_cr'] = "O Campo Conselho Regional é Obrigatório!";
            header('location: ../dashboard/cadastroEspecialista.php');

        } else {
            $_SESSION['value_cr'] = $_POST['cr'];
        }

        $cpf = preg_replace( '/[^0-9]/is', '', $_POST['cpf']);

        if (empty($_POST['cpf'])) {

            $_SESSION['vazio_cpf'] = "O Campo CPF é Obrigatório!";
            header('location: ../dashboard/cadastroEspecialista.php');

        } else if (validaCPF($cpf) == false) {

            $_SESSION['invalido_cpf'] = "CPF Inválido!";
            $_SESSION['value_cpf'] = $_POST['cpf'];
            header('location: ../dashboard/cadastroEspecialista.php');

        }  else {
            $_SESSION['value_cpf'] = $_POST['cpf'];
        }

        $email = $_POST['email'];

        if (empty($_POST['email'])) {

            $_SESSION['vazio_email'] = "O Campo E-mail é Obrigatório!";
            header('location: ../dashboard/cadastroEspecialista.php');

        } else {
            $_SESSION['value_email'] = $_POST['email'];
        }

        $telefone = $_POST['telefone'];

        if (empty($_POST['telefone'])) {

            $_SESSION['vazio_telefone'] = "O Campo Telefone é Obrigatório!";
            header('location: ../dashboard/cadastroEspecialista.php');

        } else if (validaTelefone($telefone) == false) {

            $_SESSION['invalido_telefone'] = "Telefone Inválido";
            $_SESSION['value_telefone'] = $_POST['telefone'];
            header('location: ../dashboard/cadastroEspecialista.php');
            
        } else {
            $_SESSION['value_telefone'] = $_POST['telefone'];
        }

        $id_departamento = $_POST['departamento'];

        if (empty($_POST['departamento'])) {

            $_SESSION['vazio_departamento'] = "O Campo Departamento é Obrigatório!";
            header('location: ../dashboard/cadastroEspecialista.php');

        } else {
            $_SESSION['value_departamento'] = $_POST['departamento'];
        }

        $esp = new Especialista($nome, $conselhoRegional, $email, $id_departamento, $telefone, $cpf);

        $espDao = new EspecialistaDAO();

        if ($espDao->Inserir($esp) == true) {
            $_SESSION['cadastro_sucesso'] = "Especialista Cadastrado com Sucesso!";
            header('location: ../dashboard/cadastroEspecialista.php');
        }

        // $espDao->Inserir($esp);


    }

?>