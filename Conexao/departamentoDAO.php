<?php

    include_once 'conexao.php';

    Class DepartamentoDao {
        public function Inserir(Departamento $dep) {
            try {
                if ((!empty($dep->getNome())) && (!empty($dep->getDescricao()))){
                    $pdo = Conexao::getInstance();

                    $sql = $pdo->prepare("INSERT INTO departamento VALUES (default, ?,?)");
                    $sql->execute(array($dep->getNome(), $dep->getDescricao()));

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