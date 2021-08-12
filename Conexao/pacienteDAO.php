<?php

    include_once 'conexao.php';

    class PacienteDAO {
        public function Inserir(Paciente $pac) {
            try{



                $pdo = Conexao::getIntance();
					
					return $sp_sql->execute();
				}
				else{
					return false;
				}				

            } catch (Exception $e) {
                print $e->getMessage();
            }
        }

        public function Acessar($email, $senha) {
            try {

                $pdo = Conexao::getInstance();
                $sql = $pdo->prepare("SELECT email, senha FROM paciente WHERE email = ? and senha = md5(?)");
                $sql->execute(array($email, $senha));

                $info = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $info;

            } catch (Exception $e) {
                print $e->getMessage();
            }
        }

    }

?>