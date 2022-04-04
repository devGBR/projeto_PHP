<?php
    $pessoas = array('nome' =>('Gabriel felipe'), 
    'email' => ("gfcontroladoriageral@gmail.com"), 
    'endereço' => array('bairro' => 'Santa Rita' , 'logradouro' => 'Santos Dumont' , 'numero' => '589'));
    foreach($pessoas as $modelos => $caracteristica){
        echo "$modelos\n";
        foreach($caracteristica as $caracteristicas=>$valor){
            echo "$caracteristicas=>$valor\n";
        }
    }

