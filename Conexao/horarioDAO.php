<?php

    include_once 'Conexao.php';

    class HorarioDAO {
        public function Inserir(Horario $hor) {
            try{

                if ((!empty($hor->getIdEspecialista())) && (!empty($hor->getDiaSemana())) && (!empty($hor->getComecoEspediente())) && (!empty($hor->getFimEspediente()))) {

                    $pdo = Conexao::getInstance();

                    $sql = $pdo->prepare("INSERT INTO horario VALUES (default, ?, ?, ?, ?)");
                    $sql->execute(array($hor->getIdEspecialista(), $hor->getDiaSemana(), $hor->getComecoEspediente(), $hor->getFimEspediente()));

                    return true;

                } else {
                    return false;
                }

            }catch(Exception $e){
                print $e->getMessage();
            }
        }
        public function Listar(){
            try{
                $pdo = Conexao::getInstance();
                $sql = $pdo->prepare("SELECT * FROM horario INNER JOIN especialista ON horario.id_especialista = especialista.id_especialista");
                $sql->execute();
                $horaInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
                return $horaInfo;
            }catch(PDOException $e){
                print $e->getMessage();
            }
        }
    }

?>