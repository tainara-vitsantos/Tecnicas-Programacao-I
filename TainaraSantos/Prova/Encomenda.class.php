<?php

class Encomenda {

    public function __construct(
       private float $peso = 0.00,
       private string $destinatario = "",
    
    ){}

    //Metodos get
    public function getPeso(){
        return $this->peso;
    }

    public function getDestinatario(){
        return $this->destinatario;
    }


    //Metodos set
    public function setPeso(float $peso){
        $this->peso = $peso;
    }

    public function setDestinatario(string $destinatario){
        $this->destinatario = $destinatario;
    }
 
}

    


