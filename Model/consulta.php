<?php

    class Consulta {

        private $idConsulta;
        private $idServico;
        private $horaInicio;
        private $horaFim;
        private $idEspecialista;
        private $idPaciente;
        private $dataConsulta;
        private $idDepartamento;

        public function __construct($idS, $horaI, $horaF, $idE, $idP, $dataC, $idD) {

            $this->setIdServico($idS);
            $this->setHoraInicio($horaI);
            $this->setHoraFim($horaF);
            $this->setIdEspecialista($idE);
            $this->setIdPaciente($idP);
            $this->setDataConsulta($dataC);
            $this->setIdDepartamento($idD);

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

        public function getIdDepartamento() {
            return $this->idDepartamento;
        }

        public function setIdDepartamento($idD) {
            $this->idDepartamento = $idD;
        }
    }

?>