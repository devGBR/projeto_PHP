<?php
    require 'classe/Produtos.php';

    $produto1 = new Produto;
    $produto1->codigo = 247;
    $produto1->descricao = "RTX 550, 4GB";
    $produto1->preco = 849.90;
    $produto1->mostrarPreço();
    
    echo $produto1->detalhes();

    print_r(get_class_methods('Produto'));
    print_r(get_class_vars('Produto'));
    print_r(get_object_vars($produto1));

    $produto2 = new Produto;
    $produto2->codigo = 742;
    $produto2->descricao = "RTX 3090, 24GB";
    $produto2->preco = 24990.00;
    $produto2->mostrarPreço();

    echo $produto2->detalhes();
   

    echo "O produto2 esta na classe: " . get_class($produto2);

    
    // echo "Dados do Produto\n";
    // echo "\nCódigo: " . $produto1->codigo;
    // echo "\nDescrição: " . $produto1->descricao;
    // echo "\nPreço: " . $produto1->preco;