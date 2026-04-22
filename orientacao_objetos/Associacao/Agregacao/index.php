<?php
require_once "Categoria.class.php";
require_once "Produto.class.php";

$categoria1 = new Categoria("Material Escolar");

$categoria2 = new Categoria("Material de Escritório");

$produto1 = new Produto(
	"Caneta",
	2.50,
	array($categoria1, $categoria2)
);

$categoria3 = new Categoria("Material de Desenho");

$produto1->setCategorias($categoria3);

$produto2 = new Produto(
	"Caderno",
	20.00,
	array($categoria1)
);

//Mostrar tudo de produto 1

echo "<h3>PRODUTO 1</h3>";

echo "Nome: {$produto1->getNome()}<br>";

echo "Preço:" . number_format($produto1->getPreco(), 2,  ",", ".") . "<br>";

echo "<h3>CATEGORIAS DE PRODUTO</h3>";

foreach ($produto1->getCategorias() as $categoria) {
	echo " - " . $categoria->getDescritivo() . "<br>";
}

//Mostrar tudo de produto 2
echo "<h3>PRODUTO 2</h3>";

echo "Nome: {$produto2->getNome()}<br>";

echo "Preço: " . number_format($produto2->getPreco(), 2, ",", ".") . "<br>";

echo "<h3>CATEGORIAS DO PRODUTO 2</h3>";

foreach ($produto2->getCategorias() as $categoria) {
    echo " - " . $categoria->getDescritivo() . "<br>";
}












//instanciar uma categoria e associar objetos produto e mostrar todos os dados do objeto categoria
