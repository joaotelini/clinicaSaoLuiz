<?php
    include_once '..\Controller\validacoes.php';

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

        public function __construct($nome, $rg, $cpf, $email, $senha, $telefone, $dataNascimento, $logradouro, $numero, $cep){
            $this->setNome($nome);
            $this->setRg($rg);
            $this->setCpf($cpf);
            $this->setEmail($email);
            $this->setSenha($senha);
            $this->setTelefone($telefone);
            $this->setDataNascimento($dataNascimento);
            $this->setLogradouro($logradouro);
            $this->setNumero($numero);
            $this->setCep($cep);
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
            if (validaCPF($cpf) == true) {
                $this->cpf = $cpf;
            } else {
                return false;
            }
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

        public function setLogradouro($logradouro) {
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
            if (validaCep($cep) == true) {
                $this->cep = $cep;
            }
            return false;
        }

    }

?>