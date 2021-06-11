<?php

    include_once 'conexao.php';

    class PacienteDAO {
        public function Inserir(Paciente $pac) {
            try{

                if ((!empty($pac->getNome())) && (!empty($pac->getCpf())) && (!empty($pac->getEmail())) && (!empty($pac->getSenha())) && (!empty($pac->getTelefone())) && (!empty($pac->getRg())) && (!empty($pac->getDataNascimento())) && (!empty($pac->getLogradouro())) && (!empty($pac->getCidade())) && (!empty($pac->getBairro())) && (!empty($pac->getEstado())) && (!empty($pac->getCep()))){
					$sql = "INSERT INTO `paciente` VALUES (default, :nome, :cpf, :email, :telefone, :rg, :dataNascimento, :logradouro, :cidade, :bairro, :estado, :cep)";
					
					$sp_sql = Conexao::getInstance()->prepare($sql);
					
					$sp_sql->bindValue(":nome", $pac->getNome());
					$sp_sql->bindValue(":cpf", $pac->getCpf());
					$sp_sql->bindValue(":email", md5($usu->getSenha()));
                    $sp_sql->bindValue(":email", $pac->getEmail());
                    $sp_sql->bindValue(":telefone", $pac->getTelefone());
                    $sp_sql->bindValue(":rg", $pac->getRg());
                    $sp_sql->bindValue(":dataNascimento", $pac->getDataNascimento());
                    $sp_sql->bindValue(":logradouro", $pac->getLogradouro());
                    $sp_sql->bindValue(":cidade", $pac->getCidade());
                    $sp_sql->bindValue(":bairro", $pac->getBairro());
                    $sp_sql->bindValue(":estado", $pac->getEstado());
                    $sp_sql->bindValue(":cep", $pac->getCep());
					
					return $sp_sql->execute();
				}
				else{
					return false;
				}				

            } catch (Exception $e) {
                print $e->getMessage();
            }
        }
    }

?>