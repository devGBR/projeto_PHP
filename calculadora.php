<?php
require 'function.php';

    $soma = somar(10,5);
    $diferenca = subtrair(10, 5);
    $produto = multiplicar(10, 5);
    $quociente = dividir(10, 5);

    echo 'A soma de 10 e 5 é: ' . $soma . "\n";
    echo 'A diferença entre 10 e 5 é: ' . $diferenca . "\n";
    echo 'O produto de 10 por 5 é: ' . $produto ."\n";
    echo 'O quociente de 10 por 5 é: ' . $quociente;