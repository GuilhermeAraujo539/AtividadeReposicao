<?php
    require_once "Pessoa.php";

    class Motorista extends Pessoa {
        public $id;
        public $cnh;
        private $avaliacao;
        public $historico;

        public function finalizarCorrida(){

        }
        public function cancelarCorrida(){

        }

        public function getAvaliacao(){

        }
        public function setAvaliacao($nota){
            $this->avaliacao = $nota;
        }
    }
?>