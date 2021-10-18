<?php

    include_once '../Conexao/departamentoDAO.php';
    // include_once '../Model/departamento.php';

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $depDao = new DepartamentoDAO();
    $res = $depDao->Alterar($id, $nome, $descricao);
    
    echo json_encode($res);