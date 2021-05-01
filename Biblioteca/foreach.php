<?php 

    $nomes = ['João','Fernando','Vladimir','Valério','Salvador','Joel'];
    foreach($nomes as $nome){
        echo $nome . '<br>';
    }

    $capitais = [
        'Angola' => 'Luanda',
        'Congo' => 'Kinchasha'
    ];

    foreach($capitais as $key => $value){
        echo "para o pais $key a capital e $value";
    }

?>