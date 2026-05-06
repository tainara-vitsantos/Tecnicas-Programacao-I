<?php

class Receita {
    public function __construct(
        private string $nome = " ",
        private string $ingredientes = " ",

        // Relação de composição, a classe receita tem um chef
         private ? Chef $chef = null,

         // Relação de composição, a classe receita tem avaliadores
         private array $avaliadores = array()
    ){}

     //Metodos get
    public function getNome(){
        return $this-> nome;
    }
    public function getIngredientes(){
        return $this-> ingredientes;
    }

    //Metodos set
    public function setNome (string $nome){
        $this->nome = $nome;
    }

    public function setIngredientes(string $ingredientes){
        $this->ingredientes = $ingredientes;
    }

} 