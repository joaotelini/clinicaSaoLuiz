<?php

    include_once '../Conexao/especialistaDAO.php';
    include_once './validacoes.php';

    $nome = $_POST['nome'];
    $crm = $_POST['crm'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $departamento = $_POST['departamento'];
    $cpf = preg_replace( '/[^0-9]/is', '', $_POST['cpf']);


    if (validaCPF($cpf) == true) {
        $espDao = new EspecialistaDAO();
    } else {
        echo json_encode("CPF Inválido!");
    }

?>