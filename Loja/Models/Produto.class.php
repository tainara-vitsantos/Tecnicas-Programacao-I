<?php

class Produto {

    public function __construct(
        private int $id_produto = 0,
        private string $nome = "",
        private string $descricao = "",
        private int $estoque = 0,
        private float $preco = 0.00
    ){}

    public function Exibir(){
        echo "ID: $this->id_produto <br>";
        echo "Nome: $this->nome <br>";
        echo "Descrição: $this->descricao <br>";
        echo "Estoque: $this->estoque <br>";
        echo "Preço: R$ $this->preco <br>";
    }

    public function getIdProduto(){
        return $this->id_produto;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getEstoque(){
        return $this->estoque;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setIdProduto(int $id_produto){
        $this->id_produto = $id_produto;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function setDescricao(string $descricao){
        $this->descricao = $descricao;
    }

    public function setEstoque(int $estoque){
        $this->estoque = $estoque;
    }

    public function setPreco(float $preco){
        $this->preco = $preco;
    }
}

?>