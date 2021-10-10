<?php

    include_once '../Conexao/conexao.php';

    $data = $_POST['data'];
    $especialista = $_POST['especialista'];
    
    $diasemana_numero = date('N', strtotime($data));


    $pdo = Conexao::getInstance();
    $sql = $pdo->prepare("SELECT * FROM horario INNER JOIN especialista ON horario.id_especialista = especialista.id_especialista WHERE horario.dia_semana = $diasemana_numero AND horario.id_especialista = $especialista");
    $sql->execute();
    $dataInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    $horario = array();

    foreach($dataInfo as $data){
        while ($data['comeco_espediente'] < $data['fim_espediente']){
            array_push($horario, $data['comeco_espediente']);
            $timestamp = strtotime($data['comeco_espediente']) + 60*15;
            $data['comeco_espediente'] = strftime('%H:%M:%S', $timestamp);
        }
    }
    
    echo json_encode($horario);

?>