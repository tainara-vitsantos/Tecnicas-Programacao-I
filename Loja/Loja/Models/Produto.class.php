<?php
	class Produto
	{
		public function __construct(
			private int $id_produto = 0,
			private string $nome = "",
			private string $descricao = "",
			private int $estoque = "",
			private float $preco = 0.00,
			){}
			
		public function getId_produto()
		{
			return $this->id_produto;
		}
		
		public function getNome()
		{
			return $this->nome;
		}
		public function getDescricao()
		{
			return $this->descricao;
		}
		public function getPreco()
		{
			return $this->preco;
		}
		public function getEstoque()
		{
			return $this->estoque;
		}
		//setters
		public function setId_produto($id_produto)
		{
			$this->id_produto = $id_produto;
		}
		
		public function setNome()
		{
			return $this->nome;
		}
		public function setDescricao($descricao)
		{
			$this->descricao = $descricao;
		}
		public function setPreco($preco)
		{
			$this->preco = $preco;
		}
		public function setEstoque($estoque)
		{
			$this->estoque = $estoque;
		}
		
		
	}//fim da classe
?>