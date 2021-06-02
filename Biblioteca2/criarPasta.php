<?php 

    mkdir('pasta1');

    mkdir('pasta1/pasta2');

    mkdir('pasta4/pasta2',0777,true);//criar direitamente uma pasta dentro de outra

    rmdir('pasta1');//so podemos remover pastas vasias


    //garantir que a pasta seja sempre criada no mesmo sitio

    mkdir(dirname(__FILE__) . '/pasta');

    //Navegar entre pastas

    mkdir(dirname(__FILE__) . '/pasta');//cria a pasta 1
    chdir('pasta1');//mudar o diretor
    touch('ficheiro');//criar um ficheiro

    //chdir é como se fosse cd no terminal

    //escrever informação num ficheiro

    $ficheiro = fopen('dados1.txt','w');//criar ficheiro 'w' apenas para escrever se nao existe cria e se existe apaga 'a' se o ficheiro existe acrescenta
    fwrite($ficheiro, 'primeira frase.');//escrever no ficheiro
    fwrite($ficheiro, 'segunda frase.');
    fclose($ficheiro);//fechar o ficheiro

    //Escrever um valor a cada linha do ficheiro
    $ficheiro2 = fopen('dados.txt','a');
    for($i=1;$i<= 10; $i++){
        fwrite($ficheiro2,"esta linha contem o valor",rand(0,100) . PHP_EOL);
    }
    fclose($ficheiro2);

    //ler dados de um ficheiro

    $ficheiro3=fopen('dados,txt', 'r');
    for($i = 1; $i <= 10; $i++){
        echo fgets($ficheiro3);
    }
    fclose($ficheiro3);

    /*-----------------------------------------------------------------*/
    $ficheiro3=fopen('dados,txt', 'r');
    while(feof($ficheiro3) == false){//enquanto o fim do ficheiro for falso
        echo fgets($ficheiro3);
    }
    fclose($ficheiro3);

    //gravar e ler um texto completo

    $texto="kfjflvkj kjdffjkdhjhdkjhd kjkdfklfdjnjdfkdk ldfjiu";
    file_put_contents('texto_completo.text', $texto);

    $texto2= file_get_contents('texto_completo.txt');
    echo $texto2;

    //leitura de ficheiros csv

    $file=fopen('dados.csv','r');
    $max_lines =1;
    while(!feof($file)){
        $l = fgetcsv($file);~
        print($l);
        if($max_lines-- == 0){
            die('terminado');
        }
    }

    fclose($file);








?>