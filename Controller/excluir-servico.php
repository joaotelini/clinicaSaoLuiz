<?php

    include_once '../Conexao/servicoDAO.php';

    $id = $_POST['id'];

    $serDao = new ServicoDAO();
    $res = $serDao->Excluir($id);

    echo json_encode($res);

?>