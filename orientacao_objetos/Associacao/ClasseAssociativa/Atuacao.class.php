<?php

class Atuacao{

    public function __construct(
        private string $papel = '',
        private ?Ator $ator = null,
        private ?Filme $filme = null
    ){}

    // GET
    public function getPapel(){
        return $this->papel;
    }

    public function getAtor(){
        return $this->ator;
    }

    public function getFilme(){
        return $this->filme;
    }

    // SET
    public function setPapel(string $papel){
        $this->papel = $papel;
    }

    public function setAtor(?Ator $ator){
        $this->ator = $ator;
    }

    public function setFilme(?Filme $filme){
        $this->filme = $filme;
    }

}