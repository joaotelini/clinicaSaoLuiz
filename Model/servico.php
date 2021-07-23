<?php

    class Servico {

        private $idServico;
        private $idDepartamento;
        private $nomeServico;
        private $descricao;
        private $valor;
        private $duracao;

        public function __construct($ids, $idd, $ns, $des, $val, $dura) {

            $this->idServico = $ids;
            $this->idDepartamento = $idd;
            $this->nomeServico = $ns;
            $this->descricao = $des;
            $this->valor = $val;
            $this->duracao = $dura;

        }

        public function getIdServico() {
            return $this->idServico;
        }

        public function setIdServico($ids) {
            $this->idServico = $ids;
        }

        public function getIdDepartamento() {
            return $this->idDepartamento;
        }

        public function setIdDepartamento($idd) {
            $this->idDepartamento = $idd;
        } 

        public function getNomeServico() {
            return $this->nomeServico;
        }

        public function setNomeServico($ns) {
            $this->nomeServico = $ns;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function setDescricao($des) {
            $this->descricao = $des;
        }

        public function getValor() {
            return $this->valor;
        }

        public function setValor($val) {
            $this->valor = $valor;
        }

        public function getDuracao() {
            return $this->duracao;
        }

        public function setDuracao($dura) {
            $this->duracao = $dura;
        }

    }

?>