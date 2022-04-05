<?php
    $pessoas = array('Usuário' => array(' nome ' => ' Gabriel felipe'), 
    'Contato' => array(' email ' => ' gfcontroladoriageral@gmail.com'), 
    'endereço' => array(' bairro' => ' Santa Rita' , ' logradouro ' => ' Santos Dumont' , ' numero ' => ' 589'));
    $linguagens = ["Java", "PHP", "Python", "C#"];

    foreach($pessoas as $modelos => $caracteristica){
        echo "$modelos\n";
        foreach($caracteristica as $caracteristicas=>$valor){
            echo "$caracteristicas=>$valor\n";
        }
    }
        array_pop($linguagens);
        array_push($linguagens, "Ruby");
        array_shift($linguagens);
        array_unshift($linguagens, "C");

        print_r($linguagens);
