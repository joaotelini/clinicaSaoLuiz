<?php

    include_once '../Conexao/departamentoDAO.php';

    $depDao = new DepartamentoDAO();
    $depInfo = $depDao->Listar();
    echo json_encode($depInfo);