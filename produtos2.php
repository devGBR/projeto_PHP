<?php
    require 'Produtos.php';

    $produto1 = new Produto;
    $produto1->codigo = 247;
    $produto1->descricao = "RTX 550, 4GB";
    $produto1->preco = 849.90;
    $produto1->total;

    $produto1->detalhes();
    $produto1->mostrarPreço();
    // echo 'R$ ' . number_format($preco1, 2, ',', '.');

    
    // echo "Dados do Produto\n";
    // echo "\nCódigo: " . $produto1->codigo;
    // echo "\nDescrição: " . $produto1->descricao;
    // echo "\nPreço: " . $produto1->preco;