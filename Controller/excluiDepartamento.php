<?php

    include_once '../Conexao/departamentoDAO.php';
    
    $id = $_POST['id'];

    $depDao = new DepartamentoDAO();

    $res = $depDao->Excluir($id);

    echo json_encode($res);
        

?>