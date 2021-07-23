<?php

    class HorarioEspecialista {
        
        private $idEspecialista;
        private $idHorario;

        public function __construct($idE, $idH) {
            
            $this->idEspecialista = $idE;
            $this->idHorario = $idH;

        }

        public function getIdEspecialista() {
            return $this->idEspecialista;
        }

        public function setIdEspecialista($idE) {
            $this->idEspecialista = $idE;
        }

        public function getIdHorario() {
            return $this->idHorario;
        }

        public function setIdHorario($idH) {
            $this->idHorario = $idH;
        }

    }

?>