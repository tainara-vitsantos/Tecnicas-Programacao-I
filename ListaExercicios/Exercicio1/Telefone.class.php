<?php

 class Telefone{
    public function __construct(
        private int $ddd = 0,
        private string $numero = '',
        //Relação composição, a classe telefone tem uma pessoa
        //Relação com pessoa
        private ?Pessoa $pessoa = null
    ){}
    
    // GET
    public function getDdd(){
        return $this->ddd;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function getPessoa(){
        return $this->pessoa;
    }

    // SET
    public function setDdd(int $ddd){
        $this->ddd = $ddd;
    }   

    public function setNumero(string $numero){
        $this->numero = $numero;
    }

    public function setPessoa( $pessoa){
        $this->pessoa = $pessoa;
    }


 }