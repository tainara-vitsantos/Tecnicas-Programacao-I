<?php

//Pessoa é a classe base

class Pessoa{
    public function __construct(
        protected string $nome = " ",

        //Relação de composição, a classe pessoa tem um telefone
        protected array $telefones = array(),
        //Parametros para criar um telefone na composição
        int $ddd = 0,
        string $numero = ""
       
    )
    {
        //Composição, a classe pessoa tem um telefone
         $this->telefones[] = new Telefone($ddd, $numero);
    }

    //Metodos get
    public function getNome(){
        return $this->nome;
    }

    //Metodos set
    public function setNome(string $nome){
        $this->nome = $nome;
    }

    //Metodos para o telefone
    public function getTelefones()
    {
        return $this->telefones;
    }

     public function setTelefones($ddd, $numero)
    {
        $this->telefones[] = new Telefone($ddd, $numero);
    }

    //Metodo para adicionar um telefone
   /*  public function addTelefone(Telefone $telefone){
    $this->telefones[] = $telefone; */
}

    


