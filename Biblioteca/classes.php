<?php 

    class Humano
    {
        public $nome ='Joao';
        public $apelido ='Campos';

        public function nomeCompleto(){
            return $this->nome.' '.$this->apelido;
        }

    }

    $homem = new Humano();
    $homem->nome="Fernando";
    echo $homen->nomeCompleto();

    class JogadorFutebol
    {

    }

    class FiguraGeometrica
    {
        public $largura,$altura;
        public $x;
        public $y;

        function novaArea($a,$b){
            return $a * $b;
        }
    }



?>