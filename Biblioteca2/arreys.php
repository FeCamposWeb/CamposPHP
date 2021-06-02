<?php 

$cliente =[
    'nome' => 'Carlos',
    'idade'=> 35
];

print_r($cliente);

$nomes = ['Joao','Campos'];
list($nome1,$nome2)=$nomes;
extract($cliente);//carlos 35


count($nomes);//função que serve para contar o numero de elementos no arrey.
count($nomes,COUNT_RECURSIVE);//para arrey multidimencional
is_array($nomes);//verifica se e um arrey
empty($nomes);//verifica se esta vasio retorna booleano
is_countable($nomes);//se e contavel
is_iterable($nomes);//se e interavel

$nomes =['eu','vc','ele'];
$nomes[]='nos';//incrementa no arrey

array_push($nomes,'tu');//adiciona valores
array_unshift($nomes,'tu');//adiciona no principio
array_shift($nomes);//retira o elemento do inicio
$valor = array_pop($nomes);//retira o elemento do inicio mas podemos guardar numa variavel


key_exists('fe',$nomes);//verifica se esse chave existe no arrey
in_array('fe',$nomes);//verifica se esse valor existe no arrey

$final = array_unique($nomes);//elimina valores duplicados

$final = array_unique($nomes,SORT_NUMERIC);

//SORT_NUMERIC

shuffle($nomes);//reorganiza o arrey de forma aleatoria

?>