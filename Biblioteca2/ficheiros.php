<?php
    $paises = file('paises.txt');
    print_r($paises);

    //_______________________________________________

    $paises2= file(dirname(__FILE__).'/paises.txt',FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);//tags para eliminar espaços vasios
    print_r($paises2);

    //----------------------------------

    $dado =[
        ['pedro'.'cantor',23],
        ['Ana'.'cantor',24]
    ];

    $f = fopen('dados.csv', 'w');
    foreach($dado as $linha){
        fputcsv($f,$linha);//enviar dados de um arrey num ficheiro csv
    }
    fclose($f);

    
?>