<?php

    include_once '..\Conexao\especialistaDAO.php';
    include_once '..\Model\especialista.php';

    if (isset($_POST['action'])) {
        $nome = $_POST['nome'];
        $conselhoRegional = $_POST['cr'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $departamento = $_POST['departamento'];

        echo $departamento;
    }

?>