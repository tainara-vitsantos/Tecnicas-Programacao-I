<?php

class Festa{
    public function __construct(
        private string $data_contrato = '',
        private string $data_festa = '',
        private float $valor = 0.00,

        //Relação com Cliente
        private ? Cliente $cliente = null,
        //Relação com Contratado
        private ? Contratado $contratado = null,

        //Relação com Decoração
        private ? Decoracao $decoracao = null
    ){ }

    //Metodos get
    public function getDataContrato(){
        return $this->data_contrato;
    }

    public function getDataFesta(){
        return $this->data_festa;
    }

    public function getValor(){
        return $this->valor;
    }

    //Metodos set
    public function setDataContrato(string $data_contrato){
        $this->data_contrato = $data_contrato;
    }

    public function setDataFesta(string $data_festa){
        $this->data_festa = $data_festa;
    }

    public function setValor(float $valor){
        $this->valor = $valor;
    }

    //Metodos para cliente  
    public function getCliente(){
        return $this->cliente;
    }

    public function setCliente( $cliente){
        $this->cliente = $cliente;
    }

    //Metodos para contratado
    public function getContratado(){
        return $this->contratado;
    }

    public function setContratado($contratado){
        $this->contratado = $contratado;
    }

     //Metodos para Decoração
    public function getDecoracao(){
        return $this->decoracao;
    }

    public function setDecoracao($decoracao){
        $this->decoracao = $decoracao;
    }

}