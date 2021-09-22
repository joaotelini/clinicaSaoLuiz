<?php

    class Horario {

        private $idHorario;
        private $idEspecialista;
        private $diaSemana;
        private $comecoEspediente;
        private $fimEspediente;

        public function __construct($idEsp , $diaS, $comEsp, $fimEsp) {

            $this->setIdEspecialista($idEsp);
            $this->setDiaSemana($diaS);
            $this->setComecoEspediente($comEsp);
            $this->setFimEspediente($fimEsp);

        }

        public function getIdHorario() {
            return $this->idHorario;
        }

        public function setIdHorario($idH) {
            $this->idHorario = $idH;
        }

        public function getDiaSemana() {
            return $this->diaSemana;
        }

        public function setDiaSemana($diaS) {
            $this->diaSemana = $diaS;
        }

        public function getComecoEspediente() {
            return $this->comecoEspediente;
        }

        public function setComecoEspediente($comEsp) {
            $this->comecoEspediente = $comEsp;
        }

        public function getFimEspediente() {
            return $this->fimEspediente;
        }

        public function setFimEspediente($fimEsp) {
            $this->fimEspediente = $fimEsp;
        }

        public function getIdEspecialista() {
            return $this->idEspecialista;
        }

        public function setIdEspecialista($idEsp) {
            $this->idEspecialista = $idEsp;
        }

    }

?>