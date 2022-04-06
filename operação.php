<?php
 class funcionario
 {
     var $Codigo;
     var $Nome;
     var $Salario = 586;
     var $Departamento = 'Contabilidade';
 } 
    function Salario(){

    }
    $isra = new funcionario;
    $isra->Codigo = 44;
    $isra->Nome = 'Jose da Silva';
    $isra->Salario += 100;
    $isra->Departamento;

    print_r(get_object_vars($isra));