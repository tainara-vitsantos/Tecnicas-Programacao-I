<?php

class Fornecedor {

    private string $razaoSocial;
    private string $cnpj;
    private string $celular;
    private string $email;

    //Construtor
    public function __construct($razaoSocial, $cnpj, $celular, $email){
        $this->razaoSocial = $razaoSocial;
        $this->cnpj = $cnpj;
        $this->celular = $celular;
        $this->email = $email;
    }

    public function Exibir(){
        echo "Razão Social: " . $this->razaoSocial . "<br>";
        echo "CNPJ: " . $this->cnpj . "<br>";
        echo "Celular: " . $this->celular . "<br>";
        echo "Email: " . $this->email . "<br>";
    }

    
    public function getRazaoSocial(){
        return $this->razaoSocial;
    }

    public function getCnpj(){
        return $this->cnpj;
    }

    public function getCelular(){
        return $this->celular;
    }

    public function getEmail(){
        return $this->email;
    }

   
    public function setRazaoSocial($razaoSocial){
        $this->razaoSocial = $razaoSocial;
    }

    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }

    public function setCelular($celular){
        $this->celular = $celular;
    }

    public function setEmail($email){
        $this->email = $email;
    }

}

?>