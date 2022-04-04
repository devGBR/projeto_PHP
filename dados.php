<?php
    $nome = 'Gabriel';
    $espaço = " ";
    $nomedomeio = "Felipe";
    $sobrenome = "Oliveira";
    $data_nasc = "\n31/05/2003";
    $email = "gfcontroladoriageral@gmail.com";

    echo $nome ,$espaço , $nomedomeio, $espaço , $sobrenome; 
    
    $nomecompleto = $nome . $nomedomeio . $sobrenome;
     print "\nA quantidade de caracteres é: " . strlen($nomecompleto) . "\n";

    $gmail = strtoupper($email);
     echo $gmail;

     $data = str_replace('/','-',$data_nasc);
     echo $data;
    

    //  require 'calcularpeso.php';
    //  echo "IMC: ", calculo_IMC(53, 1.80);