<?php

    include_once '../Conexao/conexao.php';

    $departamento = $_POST['departamento'];

    $pdo = Conexao::getInstance();
    $sql = $pdo->prepare("SELECT * FROM especialista WHERE id_departamento = $departamento");
    $sql->execute();
    $espInfo = $sql-fetchAll(PDO::FETCH_ASSOC);
    
    

?>

        