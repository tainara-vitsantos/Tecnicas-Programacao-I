<?php
class Produto
{
    public function __construct(
        private string $nome = " ",
        private float $preco = 0.00,
        //Atributo da relação de associação bilateral (fornecedor)
        private array $fornecedores = array()
    ) {}

    //Metodos Gets
    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }
    public function getFornecedores(): array
    {
        return $this->fornecedores;
    }

    // Associação do outro lado
    public function addFornecedor(Fornecedor $fornecedor) 
    {
        $this->fornecedores[] = $fornecedor;
    }
}
