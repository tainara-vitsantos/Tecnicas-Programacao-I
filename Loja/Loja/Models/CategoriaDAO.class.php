<?php
    class CategoriaDAO extends Conexao
    {
        public function __construct()
        {
            parent:: __construct();
        }
        
        public function Alterar()
        {

        }
        public function deletar($categoria)
        {
            $sql = "DELETE FROM categorias WHERE id_categoria = ?";
            try
            {
                $stm = $this->db->prepare($sql);
                //substituir o ponto de interrogação
                $stm->bindValue(1, $categoria->getId_categoria());
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
        public function BuscarTodas()
        {
            $sql = "SELECT * FROM categorias";
            try
            {
                //preparar a frase sql para evitar injeção SQL
                $stm = $this->db->prepare($sql);
                //executar
                $stm->execute();
                //fechar a conexão
                $this->db =null;
                return $stm->fetchAll(PDO::FETCH_OBJ);

            }
            catch(PDOException $e)
            {
                //fechar a conexão
                $this->db = null;
                return "Problema ao buscar as categorias";
            }
        }
        public function BuscarUma(){

        }
        public function cadastrar($categoria){
            $sql = "INSERT INTO categorias (descritivo) VALUES(?)";
            try
            {
                $stm = $this->db->prepare($sql);
                //substituir o ponto de interrogação
                $stm->bindValue(1, $categoria->getDescritivo());
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
        

    }//fim da classe
?>