<?php
//Prestador é a classe filha, herda os atributos e métodos da classe Pessoa
    class Prestador extends Pessoa {
        public function __construct(
            private string $especialidade = "",

            //Parametros para criar um prestador na herança
            string $nome = "",
            string $celular = "",
           
            //Relação de composição, a classe prestador tem itens
            private array $itens = array()
        ) {
            //Chama o construtor da classe pai para inicializar os atributos herdados
            parent::__construct($nome, $celular);
        }

       //Metodos get
        public function getEspecialidade(){
            return $this->especialidade;
        }

        public function getItens(){
            return $this->itens;
        }

        //Metodos set
        public function setEspecialidade($especialidade){
            $this->especialidade = $especialidade;
        }

        public function setItens($itens){
            $this->itens = $itens;
        }

        
    }
?>