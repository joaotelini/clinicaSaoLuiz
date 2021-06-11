<?php
    class Paciente {
        private $id;
        private $nome;
        private $cpf;
        private $email;
        private $senha;
        private $telefone;
        private $rg;
        private $dataNascimento;
        private $logradouro;
        private $cidade;
        private $bairro;
        private $estado;
        private $cep;

        public function __construct($id, $nome, $cpf, $email, $senha, $telefone, $rg, $dataNascimento, $logradouro, $cidade, $bairro, $estado, $cep){
            $this->id = $id;
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->email = $email;
            $this->senha = $senha;
            $this->telefone = $telefone;
            $this->rg = $rg;
            $this->dataNascimento = $dataNascimento;
            $this->logradouro = $logradouro;
            $this->cidade = $cidade;
            $this->bairro = $bairro;
            $this->estado = $estado;
            $this->cep = $cep;
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

        // ================senha=============


        public function getSenha() {
            return $this->senha;
        }

        public function setSenha($senha) {
            $this->senha = $senha;
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
        
        //====================cep==================

        public function getCep() {
            return $this->cep;
        }

        public function setCep($cep) {
            $this->cep = $cep;
        }
?>