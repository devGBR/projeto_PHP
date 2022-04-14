<?php
 declare(strict_types = 1);

    include_once 'classe/Colaborador.php';
    include_once 'classe/classeFilho/Funcionario.php';
    require_once 'classe/classeFilho/Estagiario.php';

   echo "\n Funcionarios \n\n";
   echo "\n----------------------------------------------------------------\n";

    $funcionarios = [];
   
    $f1 = new Funcionario("João da Silva", "1986-03-10", 2250.00);
    $f2 = new Funcionario("Roberto Felipe", "1999-04-16", 2000.00);
    $f3 = new Funcionario("Leonardo Lima", "2001-08-25", 2100.00);
    $f4 = new Funcionario("Renato Augusto", "1979-04-01", 2000.00);
    
    array_push($funcionarios, $f1);
    array_push($funcionarios, $f2);
    array_push($funcionarios, $f3);
    array_push($funcionarios, $f4);

    // var_dump($funcionarios);

    foreach($funcionarios as $funcionario) {
        echo $funcionario->getNome() . "\n";
        echo $funcionario->getDataFormatado() . "\n";
        echo $funcionario->getSalarioFormatado() . "\n";
        echo "\n----------------------------------------------------------------\n";
    }


    // for($i = 0; $i < count($funcionarios); $i++){
    //     print_r($funcionarios[$i]);
    //     }
//     foreach($funcionarios as $modelos => $caracteristica){
//       echo "$modelos\n";
//       foreach($caracteristica as $caracteristicas=>$valor){
//           echo "$caracteristicas=>$valor\n";
//       }
//   }
   echo "\n Estagiarios \n\n";
   echo "\n----------------------------------------------------------------\n";

   $estagiarios = [];

    $es1 = new Estagiario('José de Souza' , '2004-10-01', 1212.00);
    $es2 = new Estagiario('Diego Costa' , '2002-07-07', 1000.00);
    $es3 = new Estagiario('Douglas Silva' , '2000-02-29', 960.00);

    array_push($estagiarios, $es1);
    array_push($estagiarios, $es2);
    array_push($estagiarios, $es3);

    foreach($funcionarios as $funcionario) {
        echo $funcionario->getNome() . "\n";
        echo $funcionario->getDataFormatado() . "\n";
        echo $funcionario->getSalarioFormatado() . "\n";
        echo "\n----------------------------------------------------------------\n";
    }

//     foreach($estagiarios as $modelos => $caracteristica){
//       echo "$modelos\n";
//       foreach($caracteristica as $caracteristicas=>$valor){
//           echo "$caracteristicas=>$valor\n";
//       }
//   }
    
    
   

