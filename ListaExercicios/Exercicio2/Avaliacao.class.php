<?php

class Avaliacao{
    public function __construct(
        private float $nota = 0.0,

        // Relação de composição, a classe avaliação tem um avaliador
        private ?Avaliador $avaliador = null,
        // Relação de composição, a classe avaliação tem uma receita
        private ?Receita $receita = null
    ){}


//Metodos get
    public function getNota(){
        return $this-> nota; 
    
 //Metodos set
    public function setNota(float $nota){
        $this->nota = $nota;
     }

    public function getAvaliador()
        {
            return $this->avaliador;
        }
    public function setAvaliador($avaliador)
        {
            $this->avaliador = $avaliador;
        }
    public function getReceita()
        {
            return $this->receita;
        }
    public function setReceita($receita)
        {
            $this->receita = $receita;
        }

}

}