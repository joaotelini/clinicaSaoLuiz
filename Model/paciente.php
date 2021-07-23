<?php
    class Paciente {
        private $id;
        private $nome;
        private $rg;
        private $cpf;
        private $email;
        private $senha;
        private $telefone;
        private $dataNascimento;
        private $logradouro;
        private $numero;
        private $cep;

        public function __construct($nome, $cpf, $email, $senha, $telefone, $rg, $dataNascimento, $logradouro, $numero, $cep){
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->email = $email;
            $this->senha = $senha;
            $this->telefone = $telefone;
            $this->rg = $rg;
            $this->dataNascimento = $dataNascimento;
            $this->logradouro = $logradouro;
            $this->numero = $numero;
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

        public function setEmail($email) {
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
        //========================numero==================

        public function getNumero(){
            return $this->numero;
        }

        public function setNumero($numero) {
            $this->numero = $numero;
        }
        
        //====================cep==================

        public function getCep() {
            return $this->cep;
        }

        public function setCep($cep) {
            $this->cep = $cep;
        }
    }

?>