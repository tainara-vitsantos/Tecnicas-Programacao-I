<?php 

class Avaliador extends Pessoa{
    public function __construct(
        private string $cpf = " ",

        // Relação de composição, a classe avaliador tem receitas
        private array $receitas = array(),

        //Parametros de pessoa
        string $nome = " ", 
        int $ddd = 0,   
        string $numero = ""

    ){
        // Chamando o construtor da classe pai (Pessoa) para inicializar os atributos de pessoa
        parent::__construct($nome, $ddd, $numero);
    }

    
    //Metodos get
    public function getCpf(){
        return $this->cpf;
    }

    //Metodos set
    public function setCpf(string $cpf){
        $this->cpf = $cpf;
    }

    //Metodos para as receitas
    public function getReceitas(){
            return $this->receitas;
        }

    public function setReceitas($receita) {
            $this->receitas[] = $receita;
        }


}