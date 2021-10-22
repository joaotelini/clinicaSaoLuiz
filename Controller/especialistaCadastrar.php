<?php

    include_once '.\validacoes.php';
    include_once '..\Conexao\especialistaDAO.php';
    include_once '..\Model\especialista.php';

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $departamento = $_POST['departamento'];
    $email = $_POST['email'];
    $crm = $_POST['crm'];
    $telefone = $_POST['telefone'];
    $cpf = preg_replace( '/[^0-9]/is', '', $_POST['cpf']);

    $esp = new Especialista($nome, $crm, $email, $departamento, $telefone, $cpf);
    if (validaCPF($cpf) == true){
        if (validaTelefone($telefone) == true){
            $espDao = new EspecialistaDAO();
            if ($espDao->Inserir($esp) == true){
                echo json_encode("Especialista cadastrado com sucesso!");
            } else {
                echo json_encode("Erro ao tentar cadastrar. Verifique os campos");
            }
        } else {
            echo json_encode("Telefone Inválido");
        }
    } else {
        echo json_encode("CPF Inválido!");
    }
    