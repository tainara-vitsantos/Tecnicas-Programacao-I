<?php

class Celular
{
    public function __construct(
        private int $ddd = 0,
        private string $numero = "",
         private $cliente = null  // Não é recomendado usar null, pois pode gerar erros de referência nula
        /* private Cliente $cliente = new Cliente() */ // Não está tipado

        // private ?Cliente $cliente = null // Usando tipo nullable para indicar que pode ser null
       
    ) {}

    public function getDdd()
    {
        return $this->ddd;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    
    public function getCliente()
    {
        return $this->cliente;
    }  

    public function setDdd(int $ddd)
    {
        $this->ddd = $ddd;
    }

    public function setNumero(string $numero)
    {
        $this->numero = $numero;
    }

    public function setCliente(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }   
}

?>