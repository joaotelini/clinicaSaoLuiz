<?php

    include_once '../Conexao/conexao.php';

    $cpf = $_POST['cpf'];
	$cpf = preg_replace( '/[^0-9]/is', '', $_POST['cpf']);  


    $pdo = Conexao::getInstance();
    $sql = $pdo->prepare("SELECT cpf FROM paciente WHERE cpf = ?");
    $sql->execute(array($cpf));
    $cpfInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    if ($cpfInfo == false) {
        echo json_encode("CPF não cadastrado!");
    } else {
        echo json_encode("existe");
    }