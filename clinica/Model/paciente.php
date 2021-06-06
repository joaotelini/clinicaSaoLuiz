<?php
    class Paciente {
        private $id;
        private $nome;
        private $cpf;
        private $email;
        private $telefone;
        private $rg;
        private $dataNascimento;
        private $logradouro;
        private $cidade;
        private $bairro;
        private $estado;

        public function __construct($id, $nome, $cpf, $email, $telefone, $rg, $dataNascimento, $logradouro, $cidade, $bairro, $estado){
            $this->id = $id;
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->email = $email;
            $this->telefone = $telefone;
            $this->rg = $rg;
            $this->dataNascimento = $dataNascimento;
            $this->logradouro = $logradouro;
            $this->cidade = $cidade;
            $this->bairro = $bairro;
            $this->estado = $estado;
        }
        // ===========id=============

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        // =============nome=============

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        // =============cpf=================

        public function getCpf() {
            return $this->cpf;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        // ===========email==============

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email)
            $this->email = $email;
        }

        // ============telefone===========

        public function getTelefone() {
            return $this->telefone;
        }

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        } 

        // ===============rg=====================

        public function getRg() {
            return $this->rg;
        }

        public function setRg($rg) {
            $this->rg = $rg;
        }

        //===============dataNascimento================
        
        public function getDataNascimento() {
            return $this->dataNascimento;
        }

        public function setDataNascimento($dataNascimento) {
            $this->dataNascimento = $dataNascimento;
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
        
?>