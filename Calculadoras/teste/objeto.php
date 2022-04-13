<?php 
    // <--TIPO BOOLEANO-->
    $exibir_nome = TRUE;
    
    if($exibir_nome){
        echo 'Israel Oliveira';
    }else{
        echo 'invalido';
    }

    // <--TIPO OBJETO-->
    class computer{
        var $cpu;
        function ligar(){
            echo "ligar computador a {$this->cpu}...";
        }
    } 
    $obj = new computer;
    $obj->cpu = "1Ghz";
    $obj->ligar();

    // <--CONSTANTES-->
    define('CLIENTES', 100);
     echo CLIENTES;