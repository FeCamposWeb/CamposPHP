<?php 

    for($i =0; $i < 20;$i++){
        if($i==10){
            break;//interrompe o loop
        }
    }

    $nomes = ['João','Fernando','Vladimir','Valério','Salvador','Joel'];


    for($i=0;$i< 20;$i++){
        if($i==10){
            continue;//volta ao inicio da instrução mais com o i ja incrementado
        }
    }


    for($i=0;$i< 20;$i++){
        if($i==10){
            goto teste;//pula a linha de codigo indicada
        }
    }

    echo"tchre mo puto cuidado";

    teste:
    echo 'pula ate aqui';

?>