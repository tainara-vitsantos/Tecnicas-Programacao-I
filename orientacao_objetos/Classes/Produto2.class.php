<?php

class Produto2 {
   //Criando um metodo
    public function __construct(
        public string $nome =" ",
        public float $preco = 0.00){}

        public function Exibir(){
            echo "$this->nome - $this->preco<br>";
        }
}
?>