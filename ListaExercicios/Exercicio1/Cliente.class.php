<?php

//Dizendo que cliente é uma pessoa, ou seja, cliente herda de pessoa (classe Pai)
class Cliente extends Pessoa{
    public function __construct(
        private string $cpf = " ",

        //Parametros 
        string $nome = " ",
        array $telefones = array(),
        int $ddd = 0,
        string $numero = ""

    )
    {
        //Chamando o construtor da classe pai (Pessoa)
        parent::__construct($nome, $telefones, $ddd, $numero);
    }

    //Metodos get
    public function getCpf(){
        return $this->cpf;
    }

    //Metodos set
    public function setCpf(string $cpf){
        $this->cpf = $cpf;
    }


}