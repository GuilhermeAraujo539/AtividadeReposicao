<?php
    require_once "Pessoa.php";

    class Passageiro extends Pessoa{
        public $id;
        public $cpf;
        private $avaliacao;
        public $historico;

        public function cancelarCorrida(){

        }

        public function getAvaliacao(){

        }

        public function setAvaliacao($nota){
            $this->avaliacao = $nota;
        }
    }
?>