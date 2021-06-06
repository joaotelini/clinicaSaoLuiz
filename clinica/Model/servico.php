<?php

    class Servico {

        private $id;
        private $area;
        private $tipoServico;
        private $duracaoMedia;
        private $preco;

        public function __construct($id, $area, $tipoServico, $duracaoMedia, $preco) {

            $this->id = $id;
            $this->area = $area;
            $this->tipoServico = $tipoServico;
            $this->duracaoMedia = $duracaoMedia;
            $this->preco = $preco;

        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getArea() {
            return $this->area;
        }

        public function setArea($area) {
            $this->area = $area;
        }

        public function getTipoServico() {
            return $this->TipoServico;
        }

        public function setTipoServico($tipoServico) {
            $this->tipoServico = $tipoServico;
        }

        public function getDuracaoMedia() {
            return $this->duracaoMedia
        }

        public function setDuracaoMedia($duracaoMedia) {
            $this->duracaoMedia = $duracaoMedia;
        }

        public function getPreco() {
            return $this->preco;
        }

        public function setPreco($preco) {
            $this->preco - $preco;
        }

    }

?>