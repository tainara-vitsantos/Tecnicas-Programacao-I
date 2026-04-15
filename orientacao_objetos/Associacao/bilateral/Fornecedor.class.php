<?php
class Fornecedor {
    public function __construct(
        private string $razaoSocial = " ",
        private string $cnpj = " ",
        // relacão de associação bilateral (produto)
        private array $produtos = array()
        ){}

        //metodos get
        public function getRazaoSocial(): string{
            return $this->razaoSocial;
        }
        
        public function getCnpj(): string{
            return $this->cnpj;
        }

        public function getProdutos(): array{
            return $this->produtos;
        }
     
      
}
?>
