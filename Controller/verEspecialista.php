<?php

    include_once '../Conexao/conexao.php';

    $especialista = $_POST['especialista'];

    $pdo = Coenxao::getInstance();
    $sql = $pdo->prepare();

?>