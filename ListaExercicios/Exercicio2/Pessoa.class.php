<?php
//Pessoa é a classe base

class Pessoa {
    public function __construct(
        protected string $nome = " ",
       
       //Relação com telefone
        int $ddd = 0, 
        string $numero = ""
    ){
      //composição com telefone
      $this->telefones[] = new Telefone($ddd, $numero);
    }
}

// Metodos get
    public function getNome(){
        return $this->nome;
    }

//Metodos set
    public function setNome(string $nome){
        $this->nome = $nome;

    
 //Metodos para o telefone
    public function getTelefones()
    {
        return $this->telefones;
    }

     public function setTelefones($ddd, $numero)
    {
        $this->telefones[] = new Telefone($ddd, $numero);
    }

 }