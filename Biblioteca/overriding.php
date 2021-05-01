<?php

use Humano as GlobalHumano;

class Animal
{
    public $especie;
    public $peso;

    function tipodeEspecie(){
        return "este animal e da especie ($this->especie)";
    }

    function mover(){
        echo "esta a mover o animal";
    }

    final function mover2(){//impede que esse metodo seja reescrito "final"
        echo "esta a mover o animal";
    }
}

$animal = new Animal();

final class Mamifero extends Animal{// essa classe não podera ser herdada
    public $pernas;
    public $pelo;
    protected $local;//nao pode ser alterado pode ser herdado
    private $meio="Africa";//pertence somenta a classe

    function temQPernas(){
        echo $this->pernas;
        echo $this->meio;//e possivel
    }

    function mover(){
        echo "esta a mover o mamifero";
    }
}

//____________________________________________________________________________________________________________________

    class Rectangulo
    {
        public $largura,$altura;
        function __construct($l,$a){
            $this->largura=$l;
            $this->altura=$a;
        }

        function calcularArea(){
            return $this->largura*$this->altura;
        }
       
    }

    class Quadrado extends Rectangulo
    {
        function __construct($l){
            $this->largura = $l;
            $this->altura =$l;
        }
    }

    $rest = new Rectangulo(10,20);
    $quad = new Quadrado(10);

    class Quadrado2 extends Rectangulo
    {
        function __construct($l)
        {
            parent::__construct($l,$l);//podemos substituir parent pelo nome da classe pai Rectangulo
        }
    }

    $quad1 = new Quadrado2(5);

    //___________________________________________________________________________________________________________________

    class Humano
    {
        private $nome ="x";

        function setPrivate($objecto,$valor)
        {
            $objecto->nome=$valor;
        }

        function apresentar()
        {
            echo $this->nome;
        }
    }

    $a = new Humano();
    $b = new Humano();

    $a->setPrivate($b,'joao');//"a" a alterar o valor de "b"

    //_______________________________________________________________________________________________________________

    class Humano4
    {
        private $idade=0;

        public function setIdade($valor){
            if(is_numeric($valor)){
                $this->idade=$valor;
            }
        }

        public function getIdade(){
            return $this->idade;
        }
    }
    

?>