<?php
    session_start();
    session_destroy();

    header('location: ../clinica/index.php');
?>