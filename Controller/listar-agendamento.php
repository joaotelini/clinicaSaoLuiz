<?php

    include_once '../Conexao/consultaDAO.php';

    
    if (!empty($_POST['data'])){
        $data = $_POST['data'];
    }else {
        $data = date('Y-m-d');
    }
    
    $conDao = new ConsultaDAO();
    $conInfo = $conDao->listar($data);

    echo json_encode($conInfo);
