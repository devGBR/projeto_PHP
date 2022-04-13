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
        function SetNome($nome){
            $this->nome = $nome;
        }

        function GetNome():string{
            return $this->nome;
        }

        function SetData($data){
            $this->data = $data;
        }

        function GetData():string{
            return $this->data;
        }

        function SetSalario($salario){
            $this->salario = $salario;
        }

        function GetSalario():float{
            return $this->salario;
        }
    }
    

    
    

    
   