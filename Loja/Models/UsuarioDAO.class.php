<?php

require_once "Conexao.class.php";

class UsuarioDAO extends Conexao {

    public function __construct() {
        parent::__construct();
    }

    public function verificar_email($usuario) {
        $sql = "SELECT * FROM usuario WHERE email = ?";

        try {
            $stm = $this->conexao->prepare($sql);
            $stm->bindValue(1, $usuario->getEmail());
            $stm->execute();
            $this->conexao = null;
            return $stm-> fetchAll (PDO::FETCH_ASSOC);

            
        } catch (PDOException $e) {
            $this->conexao = null;
            return "Problema na verificação do email";
        }
    }

    public function inserir($usuario) {
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)";

        try {
            $stm = $this->conexao->prepare($sql);
            $stm->bindValue(1, $usuario->getNome());
            $stm->bindValue(2, $usuario->getEmail());
            $stm->bindValue(3, $usuario->getSenha());
            $stm->execute();
            $this->db = null;
            return "Usuário cadastrado com sucesso";

            
        } catch (PDOException $e) {
            $this->db = null;
            return "Problema no cadastro do usuário";
        }
    }
}