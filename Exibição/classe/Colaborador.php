<?php
    class Colaborador{
        private $nome;
        private $data;
        private $salario;

       public function __construct($nome, $data, $salario){
            $this->nome = $nome; 
            $this->data = $data;
            $this->salario = $salario;
        }
        
        function setNome($nome){
            $this->nome = $nome;
        }

        function getNome():string{
            return $this->nome;
        }

        function setData($data){
            $this->data = $data;
        }

        function getData():string{
            return $this->data;
        }

        function setSalario($salario){
            $this->salario = $salario;
        }

        function getSalario():float{
            return $this->salario;
        }

        function getSalarioFormatado():string{
            $salario = $this->salario;
            $numero_formatado = number_format($salario, 2, ',', '.');
            return "R$ " .$numero_formatado;
        }
        
        function getDataFormatado():string{
            $date = $this->data;
            $data = date("d/m/o", strtotime($date));
            return $data;
        }

    }
    

    
    

    
   