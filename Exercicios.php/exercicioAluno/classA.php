<?php

    class ClassA{
        //atributos
        public $nome;
        public $nota1;
        public $nota2;
        public $nota3;
        
        //operação
        public function Notas($nome,$nota1,$nota2,$nota3){
            $this->nome = $nome;
            $this->nota1 = $nota1;
            $this->nota2 = $nota2;
            $this->nota3 = $nota3;
        }

        
    }

?>