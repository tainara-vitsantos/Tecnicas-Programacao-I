<?php

class CategoriaDAO extends Conexao //Herda da classe conexao
{
	public function __construct()
	{
		parent::__construct(); //chamando contrutor do pai
	}

	public function inserir() {}
	public function alterar_categoria() {}
	public function excluir_categoria() {}


	public function buscarTodas()
	{
		$sql = "SELECT * FROM categorias";
		//mandar executar
		try {
			//Preparar a frase sql para evitar injeção Sql
			$stm = $this->db->prepare($sql);
			//Executar
			$stm->execute();
			//fechar a conexão 
			$this->db = null;

			return $stm->fetchAll(PDO::FETCH_OBJ);
			//Pega todos e devolve em formato objetos
			//Obj; Assoc; num; objetos de uma determinada classe (4 possibilidades)
		} catch (PDOException $e) {

			$this->db = null;
			return "Problema ao buscar categorias";
		}
	}
	public function buscar_uma() {}
} //fim da classe
