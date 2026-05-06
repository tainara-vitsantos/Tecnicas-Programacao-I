<?php

 class Telefone{
    public function __construct(
        private int $ddd = 0,
        private string $numero = '',
    
    ){}
  // GET
    public function getDdd(){
        return $this->ddd;
    }

    public function getNumero(){
        return $this->numero;
    }

  // SET
    public function setDdd(int $ddd){
        $this->ddd = $ddd;
    }   

    public function setNumero(string $numero){
        $this->numero = $numero;
    }

}