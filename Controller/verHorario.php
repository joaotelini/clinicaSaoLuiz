<?php

    include_once '../Conexao/conexao.php';
    include_once '../Conexao/servicoDAO.php';

    $data = $_POST['data'];
    $especialista = $_POST['especialista'];
    $servico = $_POST['servico'];
    
    $diasemana_numero = date('N', strtotime($data));

    $serDao = new ServicoDAO();
    $serInfo = $serDao->pegaDuracao($servico);

    $pdo = Conexao::getInstance();
    $sql = $pdo->prepare("SELECT * FROM horario INNER JOIN especialista ON horario.id_especialista = especialista.id_especialista WHERE horario.dia_semana = $diasemana_numero AND horario.id_especialista = $especialista");
    $sql->execute();
    $dataInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    $horario = array();

    foreach($dataInfo as $data){
        foreach($serInfo as $ser){
            while ($data['comeco_espediente'] < $data['fim_espediente']){
                array_push($horario, $data['comeco_espediente']);
                $timestamp = strtotime($data['comeco_espediente']) + 60*$ser['duracao'];
                $data['comeco_espediente'] = strftime('%H:%M:%S', $timestamp);
            }
        }
    }
    
    echo json_encode($horario);

?>