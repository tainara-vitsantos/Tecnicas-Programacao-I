<?php

//Pessoa é a classe base, agora abstrata, não pode ser instanciada, apenas herdada
abstract class Pessoa{
    public function __construct(
        protected string $nome = " ",
        protected string $celulares = "",

    ){}

    //Metodos get
    public function getNome(){
        return $this->nome;
    }

    public function getCelulares(){
        return $this->celulares;
    }

    //Metodos set
    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function setCelulares(string $celulares){
        $this->celulares = $celulares;
    }

}

    


