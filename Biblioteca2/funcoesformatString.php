<?php 

    printf("ola mundo");
    printf("Eu sou %s e o apelido %s",'Fernando','Campos');

    $valor=65;

    printf("%b",$valor);//codigo binario
    printf("%c",$valor);//codigo ascii do valor

    $localisacao ="da sala";
    $pessoas = 123;

    echo sprintf("Existem %s pessoas dentro %s",$pessoas,$localisacao);

    //%d argumentos com valor numerico
    //%2%s pega o segundo elemento e le como string idependentemente da localisaçao do elemento

    echo sprintf("capacidade:%'-10d",$pessoas);//capacidade:-------123

    //%1$08d  00000123

    //-------------------------------------------------------------------------------------------------------------

    $valor=425.6;
    echo sprintf("o valor foi de %01.2f ");//1.2 dois digitos depois da virgula
    //%08.2f  000425.6
    echo sprintf("%'_20d",$valor);



?>