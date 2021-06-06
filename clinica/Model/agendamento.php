<?php

    class Agendamento {
        private $id;
        private $idPaciente;
        private $idEspecialista;
        private $idServico;
        private $dataConsulta;

        public function __construct($id, $idPaciente, $idEspecialista, $idServico, $dataConsulta) {
            $this->id = $id;
            $this->idPaciente = $idPaciente;
            $this->idEspecialista = $idEspecialista;
            $this->idServico = $idServico;
            $this->dataConsulta = $dataConsulta;
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getIdPaciente() {
            return $this->idPaciente;
        }

        public function setIdPaciente($idPaciente) {
            $this->idPaciente = $idPaciente;
        }

        public function getIdEspecialista() {
            return $this->idEspecialista;
        }

        public function setIdEspecialista($idEspecialista) {
            $this->idEspecialista = $idEspecialista;
        }

        public function getIdServico(){
            return $this->idServico;
        }

        public function setIdServico($idServico) {
            $this->idServico = $idServico;
        }

        public function getDataConsulta() {
            return $this->dataConsulta;
        }

        public function setDataConsulta($dataConsulta) {
            $this->dataConsulta = $dataConsulta;
        }
    }

?>