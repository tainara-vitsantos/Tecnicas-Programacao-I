<?php

abstract class Veiculo {

    public function __construct(
        protected string $placa = "",
        protected string $modelo = "",
        protected float $capacidade_carga = 0.00

    ){}

    //Metodos get
    public function getPlaca(){
        return $this->placa;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getCapacidadeCarga(){
        return $this->capacidade_carga;
    }

    //Metodos set
    public function setPlaca(string $placa){
        $this->placa = $placa;
    }

    public function setModelo(string $modelo){
        $this->modelo = $modelo;
    }

    public function setCapacidadeCarga(string $capacidade_carga){
        $this->capacidade_carga = $capacidade_carga;
    }

}

    


