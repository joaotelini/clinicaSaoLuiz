<?php

    class Atendente {

        private $idAtendente;
        private $nome;
        private $cpf;
        private $email;
        private $senha;

        public function __construct($idA, $n, $cpf, $e, $s) {

            $this->idAtendente = $idA;
            $this->nome = $n;
            $this->cpf = $cpf;
            $this->email = $e;
            $this->senha = $s;

        }

        public function getIdAtendente() {
            return $this->idAtendente;
        }

        public functoin setIdAtendente($idA) {
            $this->idAtendente = $idA;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($n) {
            $this->nome = $n;
        }

        public function getCpf() {
            return $this->cpf;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($e) {
            $this->email = $e;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function setSenha($s) {
            $this->senha = $s;
        }

    }

?>