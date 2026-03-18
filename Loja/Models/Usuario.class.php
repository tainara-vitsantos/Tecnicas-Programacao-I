<?php

class Usuario {

    public function __construct(
        private int $id_usuario = 0,
        private string $nome = "",
        private string $email = "",
        private string $senha = "",
        private string $perfil = ""
    ){}

    public function Exibir(){
        echo "ID: $this->id_usuario <br>";
        echo "Nome: $this->nome <br>";
        echo "Email: $this->email <br>";
        echo "Senha: $this->senha <br>";
        echo "Perfil: $this->perfil <br>";
    }

    public function getIdUsuario(){
        return $this->id_usuario;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function getPerfil(){
        return $this->perfil;
    }

    public function setIdUsuario(int $id_usuario){
        $this->id_usuario = $id_usuario;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function setSenha(string $senha){
        $this->senha = $senha;
    }

    public function setPerfil(string $perfil){
        $this->perfil = $perfil;
    }
}

?>