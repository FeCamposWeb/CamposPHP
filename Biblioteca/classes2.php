<?php 

    class Humano2
    {
        private $nome;
        private $apelido;

        function __construct($n,$a){
            $this->nome =$n;
            $this->apelido = $a;
        }
        public function nomeCompleto(){
            return $this->nome.' '.$this->apelido;
        }    

    }

    $homen = new Humano2('joao','ribeiro');
    $homen->nomeCompleto();

    class Humano3
    {
        function __construct(public $nome,public $apelido)
        {
            $this->nome=$nome;
            $this->apelido=$apelido;
        }
    }

    $h1 = new Humano3('Fernando','Campos');

    echo $h1->nome. '' .$h1->apelido;


?>