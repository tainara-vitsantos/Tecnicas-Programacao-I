<?php
    require_once "Models/Conexao.class.php";
    require_once "Models/CategoriaDAO.class.php";
    require_once "Models/Categoria.class.php";
    class CategoriaController
    {
        public function listar()
        {
            //buscar os dados para apresentação na view
            $categoriaDAO = new CategoriaDAO();
            $retorno = $categoriaDAO->buscarTodas();
            //apresentá-los
            require_once "Views/listar_categorias.php";
        }
        public function inserir()
        {
            $msg = "";
            if($_POST)
            {
                //verificação do preenchimento
                if(empty($_POST["descritivo"]))
                {
                    $msg = "Preencha o nome da categoria";
                }
                else
                {
                    //inserir no banco de dados a nova categoria
                    $categoria = new Categoria(0, $_POST["descritivo"]);
                    $categoriaDAO = new CategoriaDAO();
                    $retorno = $categoriaDAO->cadastrar($categoria);
                    header("Location:index.php?controle=CategoriaController&metodo=listar&msg=$retorno");
                    die();

                }
            }
            require_once "Views/form_categoria.php";
        }//inserir
        public function excluir()
        {
            if($_GET && isset($_GET["id"]))
            {
                //excluir fisicamente do banco de dados
                $categoria = new Categoria($_GET["id"]);
                $categoriaDAO = new CategoriaDAO();
                $retorno = $categoriaDAO->deletar($categoria);
                header("Location:index.php?controle=CategoriaController&metodo=listar&msg=$retorno");
                die();
            }
        }//excluir
    }//fim da classe
?>