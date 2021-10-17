<?php

    include_once '..\Model\departamento.php';
    include_once '..\Conexao\departamentoDAO.php';
        
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        $dep = new Departamento($nome, $descricao);

        $depDao = new DepartamentoDao();
        if ($depDao->Inserir($dep)){
            echo json_encode("Departamento cadastrado com sucesso!");
        } else {
            echo json_encode("Erro!");
        }

        
?>