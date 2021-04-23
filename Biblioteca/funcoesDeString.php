<?php 

    $frase = 'Fernando Campos';
    echo $frase[0];
    $n= '<br>';

    $c = ($frase == $n);

    $caracteresTotal=strlen($frase);//retorna o numero de caracteres
    $fun2=substr($frase,0,4);//retorna os caracteres entre as posições indicadas
    $fun3=strtoupper($frase);//converte em maiusculas
    $fun4=strtolower($frase);//minusculas
    $fun5=str_replace('a','b',$frase);//todos os a seram substituidos por b
    $fun6=strpos($frase,'a');//indica a posição de a

    $nome="Ana Maria da Silva Cardoso";
    $x = str_contains($nome,'silva');//verifica se contem retorna true ou false casesensit
    $x3 = str_ends_with($nome,'ana');//se termina
    $x4 = mb_strlen($frase);//retomas somente os carateres sem os assentos
    $x4 = mb_strtoupper($frase);//redus ate as letras com assento


?>