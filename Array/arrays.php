<?php
    $pessoas = array('Usuário' => array(' nome ' => ' Gabriel felipe'), 
    'Contato' => array(' email ' => ' gfcontroladoriageral@gmail.com'), 
    'endereço' => array(' bairro' => ' Santa Rita' , ' logradouro ' => ' Santos Dumont' , ' numero ' => ' 589'));
   

    foreach($pessoas as $modelos => $caracteristica){
        echo "$modelos\n";
        foreach($caracteristica as $caracteristicas=>$valor){
            echo "$caracteristicas=>$valor\n";
        }
    }
//Segunda parte do exercício:

    $linguagens = ["Java", "PHP", "Python", "C#"];

        array_pop($linguagens);
        array_push($linguagens, "Ruby");
        
        array_shift($linguagens);
        array_unshift($linguagens, "C");

        print_r($linguagens);
