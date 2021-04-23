<?php

    $nome='Joao';
    if($nome == 'Joao'){
        echo "vc esta na lista pode entrar";
    }

    $idade = 18;
    if($idade <= 18){
        echo "Adolescente";
    }else{
        echo "Adulto";
    }

    $nota =5;
    if($nota<=2){
        echo 'muito fraca';
    }elseif($nota<=4){
        echo'nota insuficiente';
    }elseif($nota<=6){
        echo'nota positiva';
    }else{
        echo'nota excelente';
    }

?>