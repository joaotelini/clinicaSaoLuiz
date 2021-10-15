<?php

    include_once 'conexao.php';

    class ConsultaDAO {
        public function Inserir(Consulta $con) {
            try{
                if ((!empty($con->getIdServico())) && (!empty($con->getHoraInicio())) && (!empty($con->getHoraFim())) && (!empty($con->getIdEspecialista())) && (!empty($con->getIdPaciente())) && (!empty($con->getDataConsulta())) && (!empty($con->getIdDepartamento()))){

                    $pdo = Conexao::getInstance();
                    $sql = $pdo->prepare("INSERT INTO consulta VALUES (default, ?, ?, ?, ?, ?, ?, ?)");
                    $sql->execute(array($con->getIdDepartamento(), $con->getIdServico(), $con->getIdEspecialista(), $con->getIdPaciente(), $con->getDataConsulta(), $con->getHoraInicio(), $con->getHoraFim()));

                    return true;

                } else {
                    return false;
                }
            }catch (PDOException $e){
                print $e->getMessage();
            }
        }
        public function verificaHorario($data, $horario){
            try{

                $pdo = Conexao::getInstance();
                $sql = $pdo->prepare("SELECT * FROM consulta WHERE data_consulta = '$data' AND hora_inicio = '$horario'");
                $sql->execute();

                $conInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
                if ($conInfo) {
                    return "Horário Indispovível";
                }

            }catch (PDOException $e) {
                print $e->getMessage();
            }
        }
    }