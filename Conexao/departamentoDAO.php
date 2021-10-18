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

        public function Excluir($id) {
            try{
                
                $pdo = Conexao::getInstance();
                $sql = $pdo->prepare("DELETE FROM departamento WHERE id_departamento = $id");
                $sql->execute();    
                
                if ($sql->rowCount() == 1){
                    return "Departamento excluido com sucesso";
                } else {
                    return "Erro!, existem dados ligados a esse departamento";
                }

            }catch (PDOException $e){
                print $e->getMessage();
            }
        }

        public function Alterar($id, $nome, $descricao){
            try{
                if ((!empty($id)) && (!empty($nome)) && (!empty($descricao))) {
                    $pdo = Conexao::getInstance();
                    $sql = $pdo->prepare("UPDATE departamento SET nome = ?, descricao = ? WHERE id_departamento = ? ");
                    $sql->execute(array($nome, $descricao, $id));

                    if ($sql->rowCount() >= 1){
                        return true;
                    } else {
                        return false;
                    }
                }
            }catch(PDOException $e){
                print $e->getMessage();
            }
        }
    }

?>