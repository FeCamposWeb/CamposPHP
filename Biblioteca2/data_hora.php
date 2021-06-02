<?php

    echo 'Empresa (c) ' . date('Y');//y apresenta apenas os ultimos 2 digitos 21
    echo 'Empresa (c) ' . date('d/m/Y');
    echo 'Empresa (c) ' . date('Y-m-d H:i:s');

    /******************************************************************************** */

    echo time();//numero de segundos de 1 de 1 1970 ate hoje
    echo microtime();
    echo microtime(true);

    /********************************************************************************* */

    $agora = new DateTime();
    echo $agora->format('d-m-Y H:i:s');
    echo PHP_EOL;

    $data = new DateTime('01-01-2000');//atribiar valor a data
    $data-> setTime(23,30);
    $data-> setDate(2010,1,7);

    $data->add(new DateInterval('P180D'));//adiciona 180 dias
    $data->add(new DateInterval('P12W'));
    $data->add(new DateInterval('PT80H'));

    $data->sub(new DateInterval('P180D'));//retirar tempo


    /**************************************************************************************** */

    $datas = [
        '21-10-1998',
        '21-10-1998',
        '21-10-1998'
    ];

    foreach($datas as $data){
        $d = DateTime::createFromFormat('d-m-Y', $data);
        $d->add(new DateInterval('P180D'));
        echo $d->format('Y-m-d');
    }

    /*************************************************************************************************** */
    $data_divida = new DateTime('10-03-1997');
    $agora = new DateTime();

    $intervalo = $data_divida->diff($agora);
    echo $intervalo->days;

    /*********************************************************************************************** */
    $brasil =new DateTime('now',new DateTimeZone('America/Fortaleza'));

    $brasil->modify('+1 minute');//adicionar 1 minuto

?>