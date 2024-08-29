<?php
    class conta{
        //atributos
        public $numero;
        public $cliente;
        public $saldo;

        //operaçao
        public function abrirConta($numero,$cliente,$saldo){
            $this->numero = $numero;
            $this->cliente = $cliente;
            $this->saldo = $saldo;
        }
        public function depositar($valoresDepositar){
            $this->saldo += $valoresDepositar; 
        }
        public function sacar($sacarValor){
            $this->saldo = $this->saldo - $sacarValor;
        }
        public function info(){
            echo "<br>Dados: ".$this->cliente.
                 "<br>numero da conta: ".$this->numero.
                 "<br>saldo: ".$this->saldo;
        }
    }
?>