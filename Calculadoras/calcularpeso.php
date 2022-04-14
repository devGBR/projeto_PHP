<?php
 function calculo_IMC($peso, $altura){
     return $peso / ($altura * $altura);
 }

    echo "IMC: ", calculo_IMC(53, 1.80);