<?php 
//Proprietário é a classe filha, herda os atributos e métodos da classe Pessoa
    class Proprietario extends Pessoa {
        public function __construct(
            private string $cpf = "",

            //Parametros para criar um proprietário na herança
            string $nome = "",

            //Atributo para armazenar as lojas do proprietário, é um array porque um proprietário pode ter mais de uma loja
            private array $loja = array()
        ) {
            //Chama o construtor da classe pai para inicializar o nome do proprietário
            parent::__construct($nome);
        }

        public function getCpf() { return $this->cpf; }
        public function setCpf($cpf) { $this->cpf = $cpf; }

        public function getLoja() { return $this->loja; }
        public function setLoja($loja) { $this->loja[] = $loja; }
    }
?>