<?php 
//Pessoa é a classe pai, é uma classe abstrata, não pode ser instanciada, apenas herdada
    abstract class Pessoa {
        public function __construct(
            protected string $nome = ""
        ) {}

        public function getNome() { return $this->nome; }
        public function setNome($nome) { $this->nome = $nome; }
    }
?>