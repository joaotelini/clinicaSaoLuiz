<?php
    
    include_once '../Model/servico.php';
    include_once '../Conexao/servicoDAO.php';

    $nome = $_POST['nome'];
    $dep = $_POST['departamento'];
    $dura = $_POST['duracao'];
    $val = $_POST['valor'];
    $desc = $_POST['descricao'];

    $ser = new Servico($dep, $nome, $desc, $val, $dura);
    $serDao = new ServicoDAO();
    
    if ($serDao->Inserir($ser) == true){
        echo json_encode("Serviço cadastrado com sucesso!");
    } else {
        echo json_encode("Erro! verifique os campos");
    }

?>