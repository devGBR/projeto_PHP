<?php
    $nome = 'Gabriel';
    $sobrenome = "Felipe Oliveira";
    $data_nasc = "\n31/05/2003";
    $email = "gfcontroladoriageral@gmail.com";

    echo $nome , $espaço , $nomedomeio, $espaço , $sobrenome; 
    
    $nomecompleto = $nome . " " . $sobrenome;
    print "\nA quantidade de caracteres é: " . strlen($nomecompleto) . "\n";

    $gmail = strtoupper($email);
     echo $gmail;

     $data = str_replace('/','-',$data_nasc);
     echo $data;

    $nome_array = explode(' ', $nomecompleto);

    print_r($nome_array);

    echo $nome_array[0];
    echo " ";
    echo $nome_array[1];
    echo " ";
    echo $nome_array[2];