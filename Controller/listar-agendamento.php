<?php

    include_once '../Conexao/consultaDAO.php';

    $id = $_POST['id'];

    echo json_encode($id);

    $conDao = new ConsultaDAO();
    $conInfo = $conDao->listar($id);

    echo json_encode($conInfo);
