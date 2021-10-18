<?php

    class Departamento {

        private $idDepartamento;
        private $nome;
        private $descricao;

        public function __construct($nome, $des) {

            $this->setNome($nome);
            $this->setDescricao($des);

        }

        public function getIdDepartamento() {
            return $this->idDescricao;
        }

        public function setIdDepartamento($idD) {
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