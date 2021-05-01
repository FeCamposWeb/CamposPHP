<?php 

    class objecto1
    {
        function teste(){
            echo 'teste -normal';
        }
    }

    $a=new objecto1();

    $b= new class
    {
        function teste(){
            echo 'teste';
        }
    };

    $a->teste();
    $b->teste();

?>