<?php

require_once "Conta.class.php";
require_once "Corrente.class.php";
require_once "Poupanca.class.php";

echo "<h2>Conta</h2>";

$conta1 = new Conta(1, "123-2", "12345-67", 1000);
echo "Banco: " . $conta1->getBanco() . "<br>";

echo "<hr>";

echo "<h2>Conta Corrente</h2>";

$corrente1 = new Corrente(500, 1, "345-1", "54321-87", 1500);

echo "Banco: " . $corrente1->getBanco() . "<br>";
echo "Limite: " . number_format($corrente1->getLimite(), 2, ",", ".") . "<br>";
echo "Saldo: " . number_format($corrente1->getSaldo(), 2, ",", ".") . "<br>";


$retorno = $corrente1->depositar(2.50);

if (is_numeric($retorno)) {
    echo "Depositar: " . number_format($retorno, 2, ",", ".") . "<br>";
} else {
    echo $retorno . "<br>";
}

?>