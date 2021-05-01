<?php 

    class Text
    {
        static $valor1;
        static $valor2;
        const PI =3.14;//constante não e preciso usar o dolar

        static function adicionar()
        {
            return self::$valor1 +self::$valor2;//podemos substituir self pelo nome da classe
        }

    }

    Text::$valor1=10;

    Text::adicionar();

    Text::PI;//não e possivel concatenar do mesmo jeito que as variaveis, se se concatena com o ponto

    //rand(0,100);

    define("VERSAO","1.0");//criar uma constante
    define("PI2",3.144);
    defined('PI2');//verifica se a constante existe
    defined('CONST') or define('CONST','valor');//verifica se existe ou cria a constante

    echo __LINE__ . '<br';//indica a linha do codigo
    echo __FILE__ . '<br';
    echo __DIR__ . '<br';
    echo __FUNCTION__ . '<br';//indica a função que esta a se usar
    echo __CLASS__ . '<br';//indica a classe
    echo __METHOD__ . '<br';//indica o metodo
    echo __NAMESPACE__ . '<br';//indica o name space actual

?>