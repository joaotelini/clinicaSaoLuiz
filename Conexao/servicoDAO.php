<?php

    include_once 'conexao.php';

    class ServicoDAO {
        public function Inserir(Servico $ser) {
            try {

                if ((!empty($ser->getIdDepartamento())) && (!empty($ser->getNomeServico())) && (!empty($ser->getDescricao())) && (!empty($ser->getValor())) && (!empty($ser->getDuracao()))) {

                    $pdo = Conexao::getInstance();
                    $sql = $pdo->prepare("INSERT INTO servico VALUES (default,?,?,?,?,?)");
                    $sql->execute(array($ser->getIdDepartamento(), $ser->getNomeServico(), $ser->getDescricao(), $ser->getValor(), $ser->getDuracao()));

                    return true;

                } else {
                    return false;
                }

            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        public function Listar(){
            try{
                $pdo = Conexao::getInstance();
                $sql = $pdo->prepare("SELECT * FROM servico INNER JOIN departamento ON servico.id_departamento = departamento.id_departamento ORDER BY id_servico DESC");
                $sql->execute();
                $serInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
                return $serInfo;
            }catch (PDOException $e){
                print $e->getMessage();
            }
        }
    }

?>