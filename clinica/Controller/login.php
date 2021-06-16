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

    if ($info == false) {
        header('location: ../login.html');
    } else  {
        header('location: ../index.php');
    }

?>