<?php 

    $valor = 100;
    number_format($valor,0,null,null);//100
    number_format($valor,2,',',null);//100,00
    //o segundo elemento e o numero de casas decipas o terceiro e o separador de casas decimais o quarto e o separador das unidades 100.000

    //php -r"phpinfo();"
    //php -r "echo 'oye oye';"
    //php [nome_do_script].php
    //executar php no terminal
    //$argv[0] nome do script php
    //$argv[1] argumento para se usar no terminal
    //$argc guarda o numero de parametros a serem passados
    //php scri.php 100      estou a passar um aggumento na linha de comando

    $file = fopen(time(),'.txt','w');
    for($i=0;$i<50;$i++){
        fwrite($file,round(23,35).PHP_EOL);
    }
    fclose($file);//criar ficheiro



?>