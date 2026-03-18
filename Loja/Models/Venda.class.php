<?php

class Venda {

    public function __construct(
        private int $id_venda = 0,
        private string $dataVenda = ""
    ){}

    public function Exibir(){
        echo "ID da Venda: $this->id_venda <br>";
        echo "Data da Venda: $this->dataVenda <br>";
    }

    public function getIdVenda(){
        return $this->id_venda;
    }

    public function getDataVenda(){
        return $this->dataVenda;
    }

    public function setIdVenda(int $id_venda){
        $this->id_venda = $id_venda;
    }

    public function setDataVenda(string $dataVenda){
        $this->dataVenda = $dataVenda;
    }
}

?>