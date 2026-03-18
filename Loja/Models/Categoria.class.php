<?php

class Categoria {

    public function __construct(
        private int $id_categoria = 0,
        private string $descritivo = ""
    ){}

    public function Exibir(){
        echo "ID: $this->id_categoria <br>";
        echo "Descritivo: $this->descritivo <br>";
    }

    public function getIdCategoria(){
        return $this->id_categoria;
    }

    public function getDescritivo(){
        return $this->descritivo;
    }

    public function setIdCategoria(int $id_categoria){
        $this->id_categoria = $id_categoria;
    }

    public function setDescritivo(string $descritivo){
        $this->descritivo = $descritivo;
    }
}

?>