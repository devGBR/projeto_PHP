<?php
 declare(strict_types = 1);

    include_once 'Colaborador.php';
    include_once 'Funcionario.php';
    require_once 'Estagiario.php';

   echo "\n Funcionarios \n";
    $funcionarios = [];
   
    $f1 = new Funcionario("João da Silva", "1986-03-10", 2250.00);
    $f2 = new Funcionario("Roberto Felipe", "1999-04-16", 2000.00);
    $f3 = new Funcionario("Leonardo Lima", "2001-08-25", 2100.00);
    $f4 = new Funcionario("Renato Augusto", "1979-04-01", 2000.00);

    array_push($funcionarios, $f1);
    array_push($funcionarios, $f2);
    array_push($funcionarios, $f3);
    array_push($funcionarios, $f4);

    foreach($funcionarios as $modelos => $caracteristica){
      echo "$modelos\n";
      foreach($caracteristica as $caracteristicas=>$valor){
          echo "$caracteristicas=>$valor\n";
      }
  }
   echo "\n Estagiarios \n";

   $estagiarios = [];

    $es1 = new Estagiario('José de Souza' , '2004-10-01', 1212.00);
    $es2 = new Estagiario('Diego Costa' , '2002-07-07', 1000.00);
    $es3 = new Estagiario('Douglas Silva' , '2000-02-29', 960.00);

    array_push($estagiarios, $es1);
    array_push($estagiarios, $es2);
    array_push($estagiarios, $es3);

    foreach($estagiarios as $modelos => $caracteristica){
      echo "$modelos\n";
      foreach($caracteristica as $caracteristicas=>$valor){
          echo "$caracteristicas=>$valor\n";
      }
  }
    
    
   

