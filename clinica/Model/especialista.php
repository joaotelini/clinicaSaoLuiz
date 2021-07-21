<?php

    class Especialista {
        
        private $id;
        private $nome;
        private $conselhoRegional;
        private $email;
        private $idDepartamento;
        private $telefone;
        private $cpf;

        public function __construct($id, $nome, $cr, $email, $idd, $tele, $cpf) {

            $this->id = $id;
            $this->nome = $nome;
            $this->conselhoRegional = $cr;
            $this->email = $email;
            $this->idDepartamento = $idd;
            $this->telefone = $tele;
            $this->cpf = $cpf;

        }

        // =============id================

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        // ===================nome==============

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        // ======================email=================

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        // ============conselhoRegional==================

        public function getConselhoRegional() {
            return $this->conselhoREgional;
        }
        
        public function setConselhoRegional($conselhoREgional) {
            $this->conselhoRegional = $conselhoRegional;
        }

        // ===============telefone===================

        public function getTelefone() {
            return $this->telefone;
        }
        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        // ==================cpf====================

        public function getCpf() {
            return $this->cpf;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        public function getIdDepartamento() {
            return $this->idDepartamento;
        }

        public function setIdDepartamento($idd) {
            $this->getIdDepartamento = $idd;
        }

    }

?>