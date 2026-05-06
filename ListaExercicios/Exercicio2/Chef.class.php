<?php

//Dizendo que cliente é uma pessoa, ou seja, chef herda de pessoa (classe Pai)
class Chef extends Pessoa{
    public function __construct(
        private string $especialidade = " ",

        // Relação de composição, a classe chef tem receitas
        private array $receitas = array(),

        //Parametros de pessoa
        string $nome = " ", 
        int $ddd = 0,   
        string $numero = ""
    )
    {
        // Chamando o construtor da classe pai (Pessoa) para inicializar os atributos de pessoa
        parent::__construct($nome, $ddd, $numero);
    }

     //Metodos get
    public function getEspecialidade(){
        return $this->especialidade;
    }

    //Metodos set
    public function setEspecialidade(string $especialidade){
        $this->especialidade = $especialidade;
    }

    //Metodos para as receitas
    public function getReceitas() {
            return $this->receitas;
        }

    public function adicionarReceita($receita){
            $this->receitas[] = $receita;
        }

}