<?php
//Cliente é a classe filha, herda os atributos e métodos da classe Pessoa
    class Cliente extends Pessoa {
        public function __construct(
            private string $cpf = "",

            //Parametros para criar um cliente na herança
            string $nome = "",
            string $celular = "",
        ) {
            //Chama o construtor da classe pai para inicializar os atributos herdados
            parent::__construct($nome, $celular);
        }

        //Metodos get e set para o atributo cpf
        public function getCpf(){
            return $this->cpf; 
     }
        public function setCpf($cpf){
            $this->cpf = $cpf;
         }
    }
?>