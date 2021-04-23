<?php

    $dados=[
        0=>10,
        'nome'=>'Fernando',
        'idade'=>30
    ];

    echo $dados[0];
    echo $dados['nome'];

    $dados2 =[
        [10,20,30,40],
        [110,200,300,400],
        [1000,2000,3000,4000]
    ];

    echo $dados2[0][1];

    $cidades=[
        'Angola'=>['luanda','Cabinda','Bie'],
        'Congo'=>['kinshasa','mumbasa','Mazembe']
    ];

    echo $cidades['Angola'][2];

?>