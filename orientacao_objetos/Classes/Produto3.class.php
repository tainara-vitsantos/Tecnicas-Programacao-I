<?php

class Produto3 {
   //Criando um metodo
    public function __construct(
        public string $nome =" ",
        public float $preco = 0.00){}

        public function Exibir(){
            echo "$this->nome - $this->preco<br>";
        }

        public function getNome(){
            return $this->nome;
        }
        public function getPreco(){
            return $this->preco;
        }
        public function setNome(string $nome){
             $this->nome = $nome;
        }
        public function setPreco(float $preco){
            $this->preco = $preco;
        }
}
?>