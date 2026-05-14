<?php

class Distribuicao {

    public function __construct(
       private string $nome = "",

       private array $caminhao = array()
    
    ){}

    //Metodos get
    public function getNome(){
        return $this->nome;
    }

    //Metodos set
    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getCaminhao() { 
        return $this->caminhao; 
    }
    public function setCaminhao($inicio, $fim){
        $this->caminhao[] = new Caminhao($inicio, $fim);
    }
 
}

    


