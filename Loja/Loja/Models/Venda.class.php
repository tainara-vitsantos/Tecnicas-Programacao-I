<?php
	class Venda
	{
		public function __construct(private int $id_venda = 0, private string $dataVenda = ""){}
		
		public function getId_venda()
		{
			return $this->id_venda;
		}
		public function getDataVenda()
		{
			return $this->dataVenda;
		}
		
		//setters
		public function setId_venda($id_venda)
		{
			$this->id_venda = $id_venda;
		}
		public function setDataVenda($dataVenda)
		{
			$this->dataVenda = $dataVenda;
		}
		
	}
?>