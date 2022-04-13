<?php
class Produto
{
    var $codigo;
    var $descricao;
    var $preco;

function detalhes(){
        $detalhes = "\nDetalhes do produto \n"  . 'Código: ' . $this->codigo . "\n" . 'Descrição: ' . $this->descricao . "\n" .  "Preço: R$ " . $this->mostrarPreço() . "\n" . "\n";
        return $detalhes;
    }

function mostrarPreço(){
      
    return number_format($this->preco, 2, ',', '.');
       
    }
} 

