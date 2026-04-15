<?php

class CategoriaDAO extends Conexao //Herda da classe conexao
{
	public function __construct()
	{
		parent::__construct(); //chamando contrutor do pai
	}


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

	public function editar($categoria) {
		$sql = "UPDATE 	categorias SET descritivo = ? WHERE id_categoria = ?";
		try{
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $categoria->getDescritivo());
			$stm->bindValue(2, $categoria->getIdCategoria());
			$stm->execute();
			$this ->db = null;

			return "Categoria alterada com sucesso";
		}
		catch(PDOException $e){
			$this ->db =  null;
			return "Problema ao alterar uma categoria";

		}
	}

	public function cadastrar($categoria){
		$sql = "INSERT INTO categorias (descritivo) VALUES(?)";
		try
		{
			$stm = $this->db->prepare($sql);
			//Substituir o ponte de ?
			$stm->bindValue(1,$categoria->getDescritivo());
			$stm->execute();
			$this->db = null;
			return "Categoria inserida com sucesso";

		}
		catch(PDOException $e)
		{
			$this->db = null;
			return "Problema ao cadastrar uma nova categoria";
		}
	}

	public function deletar($categoria)
	{
		$sql = "DELETE FROM categorias WHERE id_categoria = ?";
		try
		{
			$stm = $this->db->prepare($sql);
			//substituir o ponto de interrogação
			$stm->bindValue(1, $categoria->getIdCategoria());
			$stm->execute();
			$this->db = null;
			return "Categoria excluida com sucesso";
		}
		catch(PDOException $e)
		{
			$this->db = null;
			return "Problema ao excluir uma categoria";
		}
	}

	public function buscarUma($categoria){
		$sql = "SELECT * FROM categorias WHERE id_categoria = ?";
		try
		{
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $categoria->getIdCategoria()); 
			$stm->execute();
			$this->db = null;
			return $stm -> fetchAll(PDO:: FETCH_OBJ);
		}
		catch(PDOException $e)
		{
			$this->db = null;
			return "Problema ao buscar uma categoria";
		}
	}

		
	} //fim da classe
