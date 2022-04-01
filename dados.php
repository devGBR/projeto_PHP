<?php
    $nome = 'Gabriel';
    $idade = 18;
$salario = 960.00;

    $dados = array($nome, $idade, $salario);
     var_dump($dados);
     print_r($dados);

     require 'calcularpeso.php';
     echo "IMC: ", calculo_IMC(53, 1.80);