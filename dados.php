<?php
    $nome = 'Gabriel';
    $espaço = " ";
    $nomedomeio = "Felipe";
    $sobrenome = "Oliveira";
    $data_nasc = "\n31/05/2003";
    $email = "\ngfcontroladoriageral@gmail.com\n";

    echo $nome ,$espaço , $nomedomeio, $espaço , $sobrenome; 

    $gmail = strtoupper($email);
     echo $gmail;

    $nomecompleto = array($nome . $nomedomeio . $sobrenome);
     var_dump($nomecompleto);

    

     $data = str_replace('/','-',$data_nasc);
     echo $data;
    

    //  require 'calcularpeso.php';
    //  echo "IMC: ", calculo_IMC(53, 1.80);