<?php 

    include 'for.php';//todo o codigo de for sera implementa nesse codigo
    require 'foreach.php';//todo o codigo de for sera implementa nesse codigo

    include_once 'heranca.php';//inclui apenas 1 vez
    require_once 'heranca.php';//inclui apenas 1 vez

    function falar(array $mensagem){
        echo $mensagem;
    }
    function conversar(string $mensagem){
        echo $mensagem;
    }
    falar(['oi','ye']);

    $falar = function($mensagem){echo $mensagem;};

    function minhaFuncao(callable $funcao,$dados){//indica que tem que ser funcao
        $funcao($dados);
    }

    minhaFuncao($falar,"theeeeee ee ee ee");


    function funcao():array{
        return [1,2,3];//função que deve retornar um arrey
    }
    declare(strict_types=1);//as variaves a serem usadas devem ser a definidas

    function somar(int $v1, int $v2){//colocar "?" antes do int ou string quer dizer que alem do int podemos por null nulo tambem 
        return $v1+$v2;
    }

    // int | string quer dizer que a variavel pode ser inteiro ou string
    //int | float

    $meuBoleano = false;
    echo (int)$meuBoleano;//conversão string int float array

    $nomes=[1,3,4,5];
    $nome1=(object)$nomes;

?>