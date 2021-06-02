<?php

function calcula_idade($data_nascimento){
    $agora = new DateTime();

    if($agora->format('Y') == $data_nascimento->format('Y')){
        $anos = 1;
    }else {
        $anos = $agora->format('Y')-$data_nascimento->format('Y');
    }

    if($agora->format('m') < $data_nascimento->format('m')){
        $anos++;
    }elseif($agora->format('m') == $data_nascimento->format('m')){
        if($agora->format('d') < $data_nascimento->format('d')){
            $anos --;
        }
    }

    return $anos != 1?"$anos anos" : "1 ano";
}

?>