<!-- Instancie um objeto da classe Festa e mostre todos os dados desse objeto sem utilizar
var_dump. -->

<?php

require_once "Pessoa.class.php";
require_once "Cliente.class.php";
require_once "Contratado.class.php";
require_once "Festa.class.php";
require_once "Decoracao.class.php";
require_once "Telefone.class.php";


$cliente = new Cliente("11111111", "Maria da Silva", array(), 14, "9999999999");
$contratado = new Contratado("22222222", array(), "Festas Alegria", array(), 14, "5555555555");
$decoracao = new Decoracao("Rei Leao");

//Instanciar um objeto Festa
$festa = new Festa("10/04/2026", "15/06/2026", 5000, $cliente, $contratado, $decoracao);

//Mostrar dados do objeto Festa
echo "Festa: <br>";
echo "Data Contrato: {$festa->getDataContrato()}<br>";
echo "Data da Festa: {$festa->getDataFesta()}<br>";
echo "Valor: R$ " . number_format($festa->getValor(), 2, ",", ".") . "<br>";
echo "Cliente: <br>";
echo "Nome: {$festa->getCliente()->getNome()}<br>";
echo "CPF: {$festa->getCliente()->getCpf()}<br>";

foreach($festa->getCliente()->getTelefones() as $telefone){
    echo "({$telefone->getDdd()}) {$telefone->getNumero()}<br>";
}

echo "Contratado: <br>";
echo "Nome: {$festa->getContratado()->getNome()}<br>";
echo "CPF: {$festa->getContratado()->getCnpj()}<br>";

foreach($festa->getContratado()->getTelefones() as $telefone){
    echo "({$telefone->getDdd()}) {$telefone->getNumero()}<br>";
}

echo "Decoração: <br>";;
echo "{$festa->getDecoracao()->getDescritivo()}<br>";