<?php

class Ator{
    public function __construct(
        private string $nome = '',
        private string $nacionalidade = '',

        //Atributo do relacionamento com filme 
        //Atributo do relacionamento com filme, onde um ator pode atuar em vários filmes
        private array $filmes = []
    ){}
    
    //Metodos get
    public function getNome(){
        return $this->nome;
    }
    
    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function getFilmes(){
        return $this->filmes;
    }

    //Metodos set
    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function setNacionalidade(string $nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    public function setFilme ($filme){
        $this->filmes[] = $filme;
    }

}