<?php

    class Consulta {

        private $idConsulta;
        private $idServico;
        private $horaInicio;
        private $horaFim;
        private $idEspecialista;
        private $idPaciente;
        private $dataConsulta;

        public function __construct($idC, $idS, $horaI, $horaF, $idE, $idP, $dataC) {

            $this->idConstulta = $idC;
            $this->idServico = $idS;
            $this->horaInicio = $horaI;
            $this->horaFim = $horaF;
            $this->idEspecialista = $idE;
            $this->idPaciente = $idP;
            $this->dataConsulta = $dataC;

        }

        public function getIdConsulta() {
            return $this->idConsulta;
        }

        public function setIdConsulta($idC) {
            $this->idConsulta = $idC;
        }

        public function getIdServico() {
            return $this->idServico;
        }

        public function setIdServico($idS) {
            $this->idServico = $idS;
        }

        public function getHoraInicio() {
            return $this->horaInicio;
        }

        public function setHoraInicio($horaI) {
            $this->horaInicio = $horaI;
        }

        public function getHoraFim() {
            return $this->horaFim;
        }

        public function setHoraFim($horaF) {
            $this->horaFim = $horaF;
        }

        public function getIdEspecialista() {
            return $this->idEspecialista;
        }

        public function setIdEspecialista($idE) {
            $this->idEspecialista = $idE;
        }

        public function getIdPaciente() {
            return $this->idPaciente;
        }

        public function setIdPaciente($idP) {
            $this->idPaciente = $idP;
        }

        public function getDataConsulta() {
            return $this->dataConsulta;
        }

        public function setDataConsulta($dataC) {
            $this->dataConsulta = $dataC;
        }
    }

?>