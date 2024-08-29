<?php
    class Paciente{
        public $nome;
        public $idade;

        public function dadosPaciente($nome,$idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }
        public function inf(){
            echo "<br>Nome: ".$this->nome.
                 "<br>Idade: ".$this->idade;
        }
    }
?>