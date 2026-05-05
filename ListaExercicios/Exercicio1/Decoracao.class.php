<?php

class Decoracao{
    public function __construct(
        private string $descritivo =" "
    ){}

    //Metodos get
    public function getDescritivo(){
        return $this->descritivo;
    }

    //Metodos set
    public function setDescritivo(string $descritivo){
        $this->descritivo = $descritivo;
    }

    
}