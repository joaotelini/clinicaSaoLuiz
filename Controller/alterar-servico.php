<?php

    include_once '../Conexao/servicoDAO.php';

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $dep = $_POST['departamento'];
    $dura = $_POST['duracao'];
    $valor = $_POST['valor'];
    $desc = $_POST['descricao'];

    $serDao = new ServicoDAO();
    $res = $serDao->Alterar($id, $nome, $dep, $dura, $valor, $desc);
    if ($res) {
        echo json_encode("Serviço alterado com sucesso");
    } else {
        echo json_encode("Erro! Verifique os campos");
    }


?>