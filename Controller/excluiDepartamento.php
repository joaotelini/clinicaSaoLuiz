<?php

    include_once '../Conexao/departamentoDAO.php';
    
    $id = $_POST['id'];

    $depDao = new DepartamentoDAO();

    if ($depDao->Excluir($id)){
        echo json_encode("Departamento excluido com sucesso!");
    } else {
        echo json_encode("Erro!");
    }

?>