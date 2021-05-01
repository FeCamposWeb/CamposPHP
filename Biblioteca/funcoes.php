<?php 
    $f=100;
    $g=100;
    function funcao(){
        global $f;
        $GLOBALS['g']=2345;
    }
    // em php a variaveis definidas dentro dor ciclos continuam a existir fora do ciclo.
    funcao();

    function adicionar($a,$b){
        echo "$a + $b =". $a+$b; 
    }

    function soma($a,$b=8,$g=87){
        echo $a+$b+$g;
    }

    soma(g: 1000, a:0);

    soma(500,g:1000);

    function adic($a){
        $x=func_get_arg(0);
        $y=func_get_arg(1);
        $z=func_get_arg(2);

        echo " $x -$y - $z";
        echo func_num_args();
    }

    adic(23,34,5);


    function minha(...$argumentos){
        foreach($argumentos as $v){
            echo "$v<br>";
        }
    }

    minha(12,34,56,778,78);


    function falar(){
        return;
    }

    function adicionar2($a,$b){
        $resultado = $a+$b;
        return $resultado;
    }

    //funções anonimas

    $a = function(){
        echo '<p>ola<p>';
    };

    $a();

    //CLOSURES E ARROW FUNCTION

    $x =20;
    $y=30;
    $minhaClosure = function($z) use($x,$y){
        echo "$z -$x -$y";
        $y += 1000;# não altera o valor de y
    };

    $minhaClosure(10);

    $x=20;
    $y=30;

    $minhaFuncao=fn($z) =>"$x - $y -$z";
    $minhaFuncao(23);




?>