<?php

class Motor {

    public function __construct(
       private string $combustivel = "",
       private string $potencia = "",

       private ?Caminhao $caminhao = null
    
    ){}

    //Metodos get
    public function getCombustivel(){
        return $this->combustivel;
    }

    public function getPotencia(){
        return $this->potencia;
    }

    public function getCaminhao(){
        return $this->caminhao;
    }


    //Metodos set
    public function setCombustivel(string $combustivel){
        $this->combustivel = $combustivel;
    }

    public function setPotencia(string $potencia){
        $this->potencia = $potencia;
    }

    public function setCaminhao($caminhao){
        $this->caminhao = $caminhao;
    }
 
}

    


