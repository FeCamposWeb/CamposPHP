<?php 

    function buscarNumero(){
        for($i=0;$i<10;$i++){
            yield $i;
        }
    }

    foreach(buscarNumero() as $numero){
        echo "$numero<br>";

    }

    function buscarNome(){
        yield 'joao';
        yield 'maria';
        yield from['carlos','miguel','antonio'];
        yield 'fernando';
    }

    echo '<br>';
    foreach(buscarNome() as $nomes){
        echo "$nomes<br>";
    }

?>