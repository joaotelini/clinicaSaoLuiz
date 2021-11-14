<?php

    include_once '../Conexao/consultaDAO.php';

    $id = $_POST['id'];
    $status = $_POST['status'];

    $conDao = new ConsultaDAO();
    $res = $conDao->alterarStatus($id, $status);

    if ($res){
        echo json_encode('Status alterado com sucesso');        
    } else {
        echo json_encode('Erro ao tentar alterar status');
    }


?>