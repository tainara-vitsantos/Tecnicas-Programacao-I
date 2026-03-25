<?php

class Conta{
    public function __construct(
        protected int $banco = 0,
        protected string $agencia = " ",
        protected string $conta = " ",
        protected float $saldo = 0.00
    ){}

     // GETS
     public function getBanco(){
        return $this->banco;
    }

    public function getAgencia(){
        return $this->agencia;
    }

    public function getConta(){
        return $this->conta;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    // SETS
    public function setBanco(int $banco) {
        $this->banco = $banco;
    }

    public function setAgencia(string $agencia) {
        $this->agencia = $agencia;
    }

    public function setConta(string $conta): void {
        $this->conta = $conta;
    }

    public function setSaldo(float $saldo): void {
        $this->saldo = $saldo;
    }

    public function depositar(float $valor) {
        if($valor <= 0){
            return "Valor invalido para deposito!";
           
        }
        $this->saldo += $valor;
        return $this->getSaldo();

    }//Fim do depositar

    public function sacar($valor){
        $this->saldo -= $valor;
    }

}

?>