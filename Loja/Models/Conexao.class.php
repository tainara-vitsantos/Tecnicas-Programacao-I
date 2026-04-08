<?php
class Conexao {
    public function __construct(protected $db = null){
        $parametros = "mysql:host=localhost;dbname=Loja;charset=utf8mb4";
        try
        {
            //Faz oq tem que fazer
            $this->db = new PDO($parametros,"root",""); //Usuario e senha do banco de dados
        }
        catch(PDOException $e) //PDOException  trata as encessoes  //$e mensagens, codigo
        {
            //Erro no que estamos fazendo
            echo $e->getCode();
            echo $e->getMessage();

            die("Tente mais tarde!"); //Mensagem generica
        }

    }
    
}

?>