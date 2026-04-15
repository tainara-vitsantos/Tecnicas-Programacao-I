<?php
	class Categoria
	{
		public function __construct(private int $id_categoria = 0, private string $descritivo = ""){}
		public function getId_categoria()
		{
			return $this->id_categoria;
		}
		public function getDescritivo()
		{
			return $this->descritivo;
		}
		//setters
		public function setId_categoria($id_categoria)
		{
			$this->id_categoria = $id_categoria;
		}
		public function setDescritivo($descritivo)
		{
			$this->descritivo = $descritivo;
		}
		
	}//fim da classe
?>