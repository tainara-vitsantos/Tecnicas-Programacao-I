<?php
//Um lado da relação - Um fornecedor quais são os produtos que ele fornece

require_once "Fornecedor.class.php";
require_once "Produto.class.php";


$produto1 = new Produto("Produto 1", 10.00); // Não precisa colocar o array novamente!
$produto2 = new Produto("Produto 2", 20.00); // Não precisa colocar o array novamente!


// Passa os produtos diretamente no construtor
$fornecedor = new Fornecedor("Empresa 1", "123456789/0001-00", array($produto1, $produto2));

/* echo "<pre>";
var_dump($fornecedor);
echo "</pre>";
 */

echo "Razão Social: " . $fornecedor->getRazaoSocial() . "<br>";
echo "CNPJ: " . $fornecedor->getCnpj() . "<br>";
echo "Produtos fornecidos: <br>";

foreach ($fornecedor->getProdutos() as $produto) {
    echo "- " . $produto->getNome() . " (Preço: R$ " . number_format($produto->getPreco(), 2,  ",",".") . ")<br>";
}
?>