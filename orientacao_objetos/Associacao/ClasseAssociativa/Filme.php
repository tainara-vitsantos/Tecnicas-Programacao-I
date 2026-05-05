<?php

class Filme{

    public function __construct(
        private string $titulo = '',
        private int $ano = 0,
        private array $atores = []
    ){ }

    // GET
    public function getTitulo(){
        return $this->titulo;
    }

    public function getAno(){
        return $this->ano;
    }

    public function getAtores(){
        return $this->atores;
    }

    // SET
    public function setTitulo(string $titulo){
        $this->titulo = $titulo;
    }

    public function setAno(int $ano){
        $this->ano = $ano;
    }

    public function setAtores($ator){
        $this->atores[] = $ator;
    }
}