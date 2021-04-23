<?php

    $valores=array(1,2,3,10,20,30);
    $nomes=array('joao','pedro');

    $valores2=[1,2,3,4,5];
    $nomes2=['Pedro','paula'];

    echo $valores[1];

    $dados=[
        10=>1000,
        20=>2000,
        30=>3000
    ];

    $dados[]=400;//e o mesmo que depois da chave 30 = 3000 adicionar chave 31 =400 incrementa a ultima chave


    $valores2=[10,20,30];
    $valores[]=300;//adicionar no indece 4 o valor de 300
    array_push($valores,5000);

    $dados2=[
        'A'=>20,
        'B'=>30,
    ];

    $dados3=[
        'nome'=>'Fernando',
        'idade'=>'trinta',
    ];

    echo $dados['nome'];





?>