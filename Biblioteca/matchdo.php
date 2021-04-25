<?php 

    $x=10;
    echo match($x){
        5 => 'ara no 5',
        10 => 'ara no 5',
        15 => 'ara no 5',
    };
    echo match($x){
        5 => 'ara no 5',
        10, 11,13,34,3455, => 'ara no 5',
        15 => 'ara no 5',
        default =>'muito valor'
    };

    $x2="1";

    switch ($x2){
        case 1:
        echo 'inteiro';break;
        case '1':
        echo 'string';
    }

    echo match($x2){
        1 => 'inteiro',
        '1' => 'string',
    };


?>