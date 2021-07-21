<?php

    class Departamento {

        private $idDepartamento;
        private $nome;
        private $descricao;

        public function __construct($idD, $nome, $des) {

            $this->idDepartamento = $idD;
            $this->nome = $nome;
            $this->descricao = $des;

        }

        public function getIdDescricao() {
            return $this->idDescricao;
        }

        public function setIdDescricao($idD) {
            $this->idDescricao = $idD;
        } 

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function setDescricao($des) {
            $this->descricao = $des;
        }
    }

?>