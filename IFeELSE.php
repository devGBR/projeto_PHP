<?php
 $salario = 960; //R$
 $tempo_de_casa = 1; // meses
 $reclamacoes = false; //boolean

 if($salario > 900){
     if($tempo_de_casa >= 3){
         if($reclamacoes != TRUE){

         }
     }
 };
 if (($salario > 900) and ($tempo_de_casa >= 3) and ($reclamacoes != TRUE) ){
     echo 'Parabéns será promovido';
 }
 else{
     echo 'houve insuficiencia em relação a algumas infomações, tente novamente daqui um mes!';
 };