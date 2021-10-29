<?php

    include_once '../Conexao/horarioDAO.php';

    $id = $_POST['id'];
    
    $horaDao = new HorarioDAO();
    $res = $horaDao->Excluir($id);

    echo json_encode($res);