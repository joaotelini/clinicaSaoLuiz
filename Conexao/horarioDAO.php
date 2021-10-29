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
                $sql = $pdo->prepare("SELECT * FROM horario INNER JOIN especialista ON horario.id_especialista = especialista.id_especialista ORDER BY especialista.id_especialista DESC");
                $sql->execute();
                $horaInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
                return $horaInfo;
            }catch(PDOException $e){
                print $e->getMessage();
            }
        }
        public function Excluir($id){
            try{
                $pdo = Conexao::getInstance();
                $sql = $pdo->prepare("DELETE FROM horario WHERE id_horario = ?");
                $sql->execute(array($id));
                
                if ($sql->rowCount() == 1){
                    return true;
                } else {
                    return false;
                }
            }catch (PDOException $e){
                print $e->getMessage();
            }
        }
    }

?>