<?php 

    $a="String com duas aspas";
    $b='String com aspas';

    die();//esta função para o codigo

    $v='joao'.' '.'Campos';//comcatenação
    $v='João';
    $v.=''.'Campos';//outra forma de concatenar

    $nome='Fernando';
    $sobrenome='Campos';

    $nomeCompleto="$nome $sobrenome";//novo tipo de concatenização

    $texto=<<<LABEL
    ola eu sou $nome
    kkkkkkkkkkkkkkkkkkkkkkkkkkkk
    LABEL;

     echo $texto;

?>