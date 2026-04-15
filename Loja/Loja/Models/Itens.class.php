<?php
	class Itens
	{
		public function __construct(private int $id_item = 0, private int $quantidade = 0, private float$precoUnitario = 0.00){}
		
		public function getId_item()
		{
			return $this->id_item;
		}
		
		public function getQuantidade()
		{
			return $this->quantidade;
		}
		
		public function getPrecoUnitario()
		{
			return $this->precoUnitario;
		}
		//setters
		public function setId_item($id_item)
		{
			$this->id_item = $id_item;
		}
		
		public function setQuantidade($quantidade)
		{
			$this->quantidade = $quantidade;
		}
		
		public function setPrecoUnitario($precoUnitario)
		{
			$this->precoUnitario = $precoUnitario;
		}
		
		
	}
?>