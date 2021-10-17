<?php

    include_once '../Conexao/departamentoDAO.php';

    $id = $_GET['id'];

    $depDao = new DepartamentoDAO();
    $depDao->Excluir($id);
    header('location: ../dashboard/gerenciar-departamento.php');

?>