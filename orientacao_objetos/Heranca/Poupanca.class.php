<?php

class Poupanca extends Conta {
    public function __construct( 
        private int $aniversario = 0,

        // Os elementos abaixo são parametros e nao atributos, por isso nao trem o private.
        int $banco,
        string $agencia,
        string $conta,
        float $saldo
        )
    {
        parent:: __construct($banco, $agencia, $conta, $saldo);
    }

     // GET - pegar o valor
     public function getAniversario(){
        return $this->aniversario;
    }

    // SET - alterar o valor
    public function setAniversario(int $aniversario) {
        $this->aniversario = $aniversario;
    }
    
}//fim da classe

?>