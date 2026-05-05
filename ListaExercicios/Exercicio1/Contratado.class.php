<?php 

class Contratado extends Pessoa{
    public function __construct(
        private string $cnpj = " ",
        //Relação com festa
        private array $festas = array(),

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
    public function getCnpj(){
        return $this->cnpj;
    }   
    
    //Metodos set
    public function setCnpj(string $cnpj){
        $this->cnpj = $cnpj;
    }

    //Metodos para festa    
    public function getFestas(){
        return $this->festas;
    }

    public function setFestas( $festas){
        $this->festas = $festas;
    }


}