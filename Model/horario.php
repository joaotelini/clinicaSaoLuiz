<?php

    class Horario {

        private $idHorario;
        private $diaSemana;
        private $comecoEspediente;
        private $fimEspediente;

        public function __construct($idH, $diaS, $comEsp, $fimEsp) {

            $this->idHorario = $idH;
            $this->diaSemana = $diaS;
            $this->comecoEspediente = $comEsp;
            $this->fimEspediente = $fimEsp;

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
            $this->diaSemana - $diaS;
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

    }

?>