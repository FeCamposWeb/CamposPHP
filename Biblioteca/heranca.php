<?php 

class Animal
{
    public $especie;
    public $peso;

    function tipodeEspecie(){
        return "este animal e da especie ($this->especie)";
    }
}

$animal = new Animal();

class Mamifero extends Animal{
    public $pernas;
    public $pelo;

    function temQPernas(){
        echo $this->pernas;
    }
}

?>