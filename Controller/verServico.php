<?php

    include_once '../Conexao/conexao.php';

    $departamento = $_POST['departamento'];

    $pdo = Conexao::getInstance();
    $sql = $pdo->prepare("SELECT * FROM servico WHERE id_departamento = $departamento");
    $sql->execute();
    $serInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($serInfo);

?>