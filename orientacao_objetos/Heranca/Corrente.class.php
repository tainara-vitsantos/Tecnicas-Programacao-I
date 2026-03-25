<?php

class Corrente extends Conta {
    public function __construct( 
        private float $limite = 0.00,

        // Os elementos abaixo são parametros e nao atributos, por isso nao trem o private.
        int $banco,
        string $agencia,
        string $conta,
        float $saldo
        )
    {
        parent:: __construct($banco, $agencia, $conta, $saldo);
    }

    // GET - retorna o limite
    public function getLimite() {
        return $this->limite;
    }

    // SET - altera o limite
    public function setLimite(float $limite) {
        $this->limite = $limite;
    }

    public function sacar($valor){
        if($this->saldo + $this->limite >= $valor){
            parent :: sacar($valor);
        }
    }
    
}

?>