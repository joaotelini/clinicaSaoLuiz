<?php

    include_once 'conexao.php';

    class EspecialistaDAO {
        public function Inserir(Especialista $esp) {
            try{

                if ((!empty($esp->getNome())) && (!empty($esp->getConselhoRegional())) && (!empty($esp->getEmail())) && (!empty($esp->getIdDepartamento())) && (!empty($esp->getTelefone())) && (!empty($esp->getCpf()))) {

                    $pdo = Conexao::getInstance();

                    $sql = $pdo->prepare("INSERT INTO especialista VALUES (default, ?,?,?,?,?,?)");
                    $sql->execute(array($esp->getNome(), $esp->getConselhoRegional(), $esp->getEmail(), $esp->getIdDepartamento(), $esp->getTelefone(), $esp->getCpf()));

                    return true;

                } else {
                    return false;
                }

            } catch (Exception $e) {
                print $e->getMessage();
            }
        }
    }

        
?>