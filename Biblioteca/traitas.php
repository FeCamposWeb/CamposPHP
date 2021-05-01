<?php 

    trait MinhasHabilidades
    {
        public function falar($mensagem){
            echo"eu digo: $mensagem";
        }
        public function saltar($altura){
            echo"eu salto: $altura";
        }
    }

    class Humano
    {
        use MinhasHabilidades;//altomaticamente a classe fica com os dois metodos implementados
    }

?>