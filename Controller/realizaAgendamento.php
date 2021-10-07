<?php

    include_once '../Model/consulta.php';
    include_once '../Conexao/conexao.php';
    session_start();

    $paciente = $_POST['paciente'];



    echo $_SESSION['especialista_info'];

    