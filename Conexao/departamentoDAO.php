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

        public function Listar() {
            $pdo = Conexao::getInstance();
            $sql = $pdo->prepare("SELECT * FROM departamento ORDER BY id_departamento DESC");
            $sql->execute();
            $depInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
            if ($depInfo)
                return $depInfo;
            else 
                return "erro!";
        }
    }

?>