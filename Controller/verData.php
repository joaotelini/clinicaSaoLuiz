<?php

    include_once '../Conexao/conexao.php';

    $data = $_POST['data'];
    $especialista = $_POST['especialista'];
    

    // $data = srttotime($data);
    // $res = date('d/m/Y', $data);
    $diasemana_numero = date('N', strtotime($data));


    $pdo = Conexao::getInstance();
    $sql = $pdo->prepare("SELECT * FROM horario INNER JOIN especialista ON horario.id_especialista = especialista.id_especialista WHERE horario.dia_semana = $diasemana_numero AND horario.id_especialista = $especialista");
    $sql->execute();
    $dataInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($dataInfo);

?>