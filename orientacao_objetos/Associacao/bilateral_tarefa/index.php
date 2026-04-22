
<?php
require_once "Fornecedor.class.php";
require_once "Produto.class.php";

// Instanciando os produtos
$produto1 = new Produto("Produto 1", 10.00);
$produto2 = new Produto("Produto 2", 20.00);

// Instanciando o fornecedor (sem produtos inicialmente)
$fornecedor = new Fornecedor("Empresa 1", "123456789/0001-00");

// Associando corretamente (dos dois lados)
$fornecedor->addProduto($produto1);
$fornecedor->addProduto($produto2);

// Exibindo
echo "Razão Social: " . $fornecedor->getRazaoSocial() . "<br>";
echo "CNPJ: " . $fornecedor->getCnpj() . "<br>";
echo "Produtos fornecidos:<br>";

foreach ($fornecedor->getProdutos() as $produto) {
    echo "- " . $produto->getNome() . 
         " (R$ " . number_format($produto->getPreco(), 2, ",", ".") . ")<br>";
}
?>