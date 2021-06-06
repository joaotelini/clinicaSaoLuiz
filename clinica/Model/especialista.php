<?php

    class Especialista {
        private $id;
        private $nome;
        private $especialidade;
        private $email;
        private $conselhoRegional;
        private $telefone;
        private $cpf;
        private $rg;
        private $logradouro;
        private $cidade;
        private $bairro;
        private $estado;

        public function __construct($id, $nome, $especialidade, $email, $conselhoRegional, $telefone, $cpf, $rg, $logradouro, $cidade, $bairro, $estado) {
            $this->id = $id;
            $this->nome = $nome;
            $this->especialidade = $especialidade;
            $this->email = $email;
            $this->conselhoRegional = $conselhoRegional;
            $this->telefone = $telefone;
            $this->cpf = $cpf;
            $this->rg = $rg;
            $this->logradouro = $logradouro;
            $this->cidade = $cidade;
            $this->bairro = $bairro;
            $this->estado = $estado;
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

        // ====================especialidade==================

        public function getEspecialidade() {
            return $this->especialidade;
        }

        public function setEspecialidade($especialidade) {
            $this->especialidade = $especialidade;
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

        // =======================rg=================

        public function getRg() {
            return $this->rg;
        }

        public function setRg($rg) {
            $this->rg = $rg;
        }

        //================logradouro=====================

        public function getLogradouro() {
            return $this->logradouro;
        }

        public function setLogradouuro($logradouro) {
            $this->logradouro = $logradouro;
        }

       //=====================cidade======================
       
        public function getCidade() {
           return $this->cidade;
        }

        public function setCidade($cidade) {
            $this->cidade = $cidade;
        }

        //========================bairro========================

        public function getBairro() {
            return $this->bairro;
        }

        public function setBairro($bairro) {
            $this->bairro = $bairro;
        }
        
        //===================estado=================

        public function getEstado() {
            return $this->estado;
        }

        public function setEstado($estado) {
            $this->estado = $estado;
        }

    }

?>