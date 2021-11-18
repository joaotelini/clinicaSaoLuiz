<?php

    include_once '../Conexao/pacienteDAO.php';
    include_once '../Model/paciente.php';

    if (isset($_POST['email']) && isset($_POST['senha'])){
        echo "existe";
    }

?>