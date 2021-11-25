<?php

    include_once '../Conexao/pacienteDAO.php';

    if (isset($_POST['email']) && isset($_POST['senha'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $pacDao = new PacienteDAO();
        $pacInfo = $pacDao->login($email, $senha);
        if ($pacInfo){
            session_start();
            $_SESSION['usuario'] = $pacInfo;

            echo "<script>window.location = '../clinica/perfil.php'</script>";
        } else {
            echo "<script>window.location = '../clinica/login.php'</script>";
        }
    } else {
        echo "<script>window.location = '../clinica/login.php'</script>";
    }

?>