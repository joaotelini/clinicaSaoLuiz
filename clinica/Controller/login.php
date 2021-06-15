<?php

    include_once '../Conexao/pacienteDAO.php';
    include_once '../Model/paciente.php';

    if (empty($_POST['email']) && empty($_POST['senha'])) {
        header('location: ../login.html');
        exit();
    } else {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    }



    $pacDAO = new PacienteDAO();
    $info = ($pacDAO->Acessar($email, $senha));

    $row = mysql_num_rows($info);
    // header('location: ../conexao/.php');

?>