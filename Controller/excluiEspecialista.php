<?php
    include_once '../Conexao/especialistaDAO.php';

    $id = $_POST['id'];

    $espDao = new EspecialistaDAO();
    $res = $espDao->Excluir($id);
    
    echo json_encode($res);
?>