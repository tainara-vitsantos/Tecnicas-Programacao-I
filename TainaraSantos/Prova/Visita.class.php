<?php

// Visita é a classe Associativa entre a classe Caminhao e a classe Centro de Distribuição
class Visita {
    public function __construct(
        private string $data = "",
        private float $peso = 0.0,
        private string $plataforma = "",


        //Relação
        private ?Caminhao $caminhao = null, 
        private ?Distribuicao $distribuicao = null
    ){}

    
    //Metodos get
    public function getData(){
        return $this->data;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function getPlataforma(){
        return $this->plataforma;
    }

    public function getCaminhao(){
        return $this->caminhao;
    }

    public function getDistribuicao(){
        return $this->distribuicao;
    }

    //Metodos set
    public function setData(string $data){
        $this->data = $data;
    }

    public function setPeso(float $peso){
        $this->peso = $peso;
    }

    public function setPlataforma(string $plataforma){
        $this->plataforma = $plataforma;
    }
    
    public function setCaminhao($caminhao){
        $this->caminhao = $caminhao;
    }

    public function setDistribuicao($distribuicao){
        $this->distribuicao = $distribuicao;
    }


}