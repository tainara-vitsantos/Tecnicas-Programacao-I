<?php
	class Produto
	{
		//fracamente tipado
		public function __construct(
            private string $nome = "", 
            private float $preco = 0.00, 
            private array $categorias = array(),
        ){}
		
		
		public function getNome()
        {
            return $this->nome;
        }  
        public function getPreco()
        {
            return $this->preco;
        }
        
        public function getCategorias()
        {
            return $this->categorias;
        }

       
        public function setNome(string $nome)
        {
            $this->nome = $nome;
        }

        public function setPreco(float $preco)
        {
            $this->preco = $preco;
        }
		
        public function setCategorias($categoria)
        {
            $this->categorias[] = $categoria;
        }
	}
?>