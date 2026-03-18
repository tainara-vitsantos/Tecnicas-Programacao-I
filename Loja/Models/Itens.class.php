<?php

class Itens {

    public function __construct(
        private int $id_itens = 0,
        private int $quantidade = 0,
        private float $precoUnitario = 0.00
    ){}

    public function Exibir(){
        echo "ID do Item: $this->id_itens <br>";
        echo "Quantidade: $this->quantidade <br>";
        echo "Preço Unitário: R$ $this->precoUnitario <br>";
    }

    public function getIdItens(){
        return $this->id_itens;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function getPrecoUnitario(){
        return $this->precoUnitario;
    }

    public function setIdItens(int $id_itens){
        $this->id_itens = $id_itens;
    }

    public function setQuantidade(int $quantidade){
        $this->quantidade = $quantidade;
    }

    public function setPrecoUnitario(float $precoUnitario){
        $this->precoUnitario = $precoUnitario;
    }
}

?>