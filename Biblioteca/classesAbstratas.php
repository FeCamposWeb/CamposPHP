<?php 

    abstract class Forma//classes abstratas não podem ser instanceadas 
    {
        public $largura =100;
        public $altura =200;

        abstract public function area();//as classes que erdam classes abstratas deverm obrigatoriamente reescrever as funções abstratas

        function altura(){
            return $this->altura;
        }
    }

?>