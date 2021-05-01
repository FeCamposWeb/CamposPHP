<?php 

    $b=null;

    isset($a);//verifica se esta definida
    empty($b);//verifica se a variavel tem valor vasio
    is_null($b);//verifica se a variavel e nula
    unset($b);//destroi uma variavel

    $x=null;
    $nome=$x ?? 'sem nome';//verifica se x e nulo se sim aplica o valor sem nome "??"

    $apelido=null;
    $apelido ??='oyeee';//se om apelido for nulo vai atribuir o valor

    is_array($x);//verifica se é aarey
    is_bool($x);//verifica se é bolean
    

    echo '<pre>';
    $v="joao";
    print_r($a);
    var_dump($v);
    var_export($v);
    $f=[1,2,3,4];
    print_r($f);//apresenta as informações de foema detalhada
    var_dump($f);//apresenta com mais detalhes

    die();//termina o codigo



?>