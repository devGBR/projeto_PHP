<?php
class Produto
{
    var $codigo;
    var $descricao;
    var $preco;

function detalhes(){
        print "Detalhes do produto \n"  . 'Código: ' . $this->codigo . "\n" . 'Descrição: ' . $this->descricao . "\n" . 'Preço: ' . 'R$'. $this->preco;
    }

function mostrarPreço(){
        print 'R$ ' . number_format($produto1->preco, 2, ',');
    }
} 
