<?php

class Rota {

    public function __construct(
       private string $inicio = "",
       private string $fim = "",
    
    ){}

    //Metodos get
    public function getInicio(){
        return $this->inicio;
    }

    public function getFim(){
        return $this->fim;
    }


    //Metodos set
    public function setInicio(string $inicio){
        $this->inicio = $inicio;
    }

    public function setFim(string $fim){
        $this->fim = $fim;
    }
 
}

    


