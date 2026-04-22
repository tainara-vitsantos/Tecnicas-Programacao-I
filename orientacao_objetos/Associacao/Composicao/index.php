<?php

require_once "Cliente.class.php";
require_once "Celular.class.php";

// Instanciar um objeto Cliente

// O cliente já tem um celular associado
$cliente = new Cliente("João Silva", "123.456.789-00", array(), 14, "98765-4321"); 
$cliente->setCelular(14, "91234-5678"); // Adiciona um segundo celular ao cliente

echo "CLIENTE: <br>";
echo "Nome: " . $cliente->getNome() . "<br>";
echo "CPF: " . $cliente->getCpf() . "<br>";
echo "Celulares: <br>";
foreach ($cliente->getCelular() as $celular) {
    echo "- (" . $celular->getDdd() . ") " . $celular->getNumero() . "<br>";
}


// Instanciar um objeto Celular
$cliente2 = new Cliente("Maria Souza", "987.654.321-00"); // O cliente é criado sem celular
$celular = new Celular(14, "98805-5751", $cliente2); // O celular é criado com uma referência ao cliente

echo "<br>CELULAR: <br>";
echo "({$celular->getDdd()}) {$celular->getNumero()}<br>"; 
echo "Cliente associado: <br>";
echo "Nome: " . $celular->getCliente()->getNome() . "<br>"; 
echo "CPF: " . $celular->getCliente()->getCpf() . "<br>"; 


?>

