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
        public function verificaHorario($data, $horaInicio, $horaFim, $especialista){
            try{

                $pdo = Conexao::getInstance();
                $sql = $pdo->prepare("SELECT * FROM consulta WHERE data_consulta = '$data' AND id_especialista = '$especialista'");
                $sql->execute();

                $conInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
                
                foreach($conInfo as $con){
                    if ($horaInicio >= $con['hora_inicio'] && $horaInicio < $con['hora_fim']){
                        return "Horário Indispovível";
                    } else if ($horaFim > $con['hora_inicio'] && $horaFim <= $con['hora_fim']){
                        return "Horário Indispovível";
                    } else if ($con['hora_inicio'] >= $horaInicio && $con['hora_inicio'] < $horaFim){
                        return "Horário Indispovível";
                    }
                }

            }catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        public function listar($id){
            try{
                $pdo = Conexao::getInstance();
                $sql = $pdo->prepare("SELECT * FROM consulta
                INNER JOIN paciente ON consulta.id_paciente = paciente.id_paciente
                INNER JOIN servico ON consulta.id_servico = servico.id_servico
                INNER JOIN especialista ON consulta.id_especialista = especialista.id_especialista
                WHERE consulta.id_departamento = $id ORDER BY consulta.hora_inicio DESC");
                $sql->execute();
                $conInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
                return $conInfo;
            }catch(PDOException $e){
                print $e->getMessage();
            }
        }
    }