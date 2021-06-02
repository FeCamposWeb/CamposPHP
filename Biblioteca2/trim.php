<?php 

    $a = "isto é uma string";
    $a =trim($a);//remove os espaços no inicio e no fim
    $a =ltrim($a);//remove os espaços no inicio
    $a =rtrim($a);//remove os espaços no fim

    trim($a,'a');//remove o primeiro a
    strtoupper($a);//tranforma em maiuscula as acentuadas não
    mb_strtoupper($a);//ate as acentuadas
    strtolower($a);//minuscula
    ucfirst($a);//primeira letra em maiuscula
    ucwords($a);//todas as primeiras palavras em maisculas

    strlen($s);//numero de caracteres

    $b=str_repeat('-',20);

    $valor = 100;
    echo str_pad($valor,'30','.',STR_PAD_LEFT) . PHP_EOL;//vai repetir o suficiente ate atingir 30 caracteres  ponto a esquerda de valor e quebrar a linha com o ultimo codigo

    str_contains($a,$b);//verifica se a esta contido no b
    str_ends_with($a,'e');//verifica se a termina com e
    str_starts_with($a,'t');//se começa com t
    //preg_match()

    $a="esta frase e para teste";
    $b = substr($a,5,10);//frase e p     resultado
    $d= substr($a,10);
    $f= substr($a,-4,5);//le do fim para o principio
    $g= substr($a,10,-4);//os ultimos 4 não seram lidos


    $str_nomes ='joao,carlos,ana,antonio';
    $nome=explode(',',$str_nomes);//tranforma esta string em arrei o separador sera a virgula
    $nome2=explode(',',$str_nomes,2);//maximo de elementos no arrey

    $implodee= implode('|',$nome);//faz o contrario do explode o | e o careter de separação


    $a2="string de teste do sistema";
    str_replace('te','TE',$a2);//substitui todos te em TE da estring a2
    str_replace('te','TE',$a2,4);//numero de sustituições a serem feitas

    $vogais =['a','e','i','o','u'];
    str_replace($vogais,"",$a2);//substitui todas as vogais por espaços vasios

    $a3="este jantar esta muito bom";
    $original=['jantar', 'bom'];
    $novo=['almoço','mau'];

    str_replace($original,$novo,$a3);
    str_ireplace($original,$novo,$a3);//casesensite 

    str_split($a3);//tranforma $a3 em arrey

    str_split($a,3);//separa em blocos de 3 caracteres

    mb_str_split($a,3);

    strstr($a3,'este');//le a tring do primeiro este ate ao fim
    stristr($a3,'este');
    strstr($a3,'este',true);//tudo que esta para tras de este sem o este

    strpos($a3,'este');//guarda a posição do elemento este na string $a3
    stripos($a3,'este');
    strpos($a3,'este',10);//a pesquisa sera feita a partir da posição 10

    strrpos($a3,'est');//procura a ultima ocorrencia de est na tring $a3
    strripos($a3,'est');
    mb_strrpos($a3,'est');
    

?>