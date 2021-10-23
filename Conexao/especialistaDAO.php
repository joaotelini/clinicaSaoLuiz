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
        public function Listar() {
            $pdo = Conexao::getInstance();
            $sql = $pdo->prepare("SELECT * FROM especialista INNER JOIN departamento ON especialista.id_departamento = departamento.id_departamento ORDER BY especialista.id_especialista DESC");
            $sql->execute();
            $espInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $espInfo;
        }

        public function Excluir($id){
            try{
                $pdo = Conexao::getInstance();
                $sql = $pdo->prepare("DELETE FROM especialista WHERE id_especialista = $id");
                $sql->execute();

                if ($sql->rowCount() >= 1){
                    return true;
                } else {
                    return false;
                }
            }catch(PDOException $e) {
                print $e->getMessage();
            }
        }

        public function Alterar($id, $nome, $crm, $cpf, $email, $telefone, $departamento){
            try{
                
            }
        } 
    }

        
?>