<?php

require_once "Produto.class.php"; //importa a classe Produto.
require_once "Produto2.class.php"; //importa a classe Produto2.
require_once "Produto3.class.php"; //importa a classe Produto3.


// Usa um construtor padrão da linguagem php
$produto1 = new Produto(); //cria um objeto da classe Produto usando o construtor.

//Atribuindo valores para os atributos da classe produtos
$produto1->nome = "Notebook";
$produto1->preco = 3500.00;

/* echo "<pre>";
var_dump($produto1); //mostra todas as informações do objeto (atributos, tipos, etc).
echo "</pre>"; */

//Passando parametro por valor, seguindo a ordem de definição do construtor
$produto2 = new Produto2("Teclado", 150.00);

//por ordem de referencia, não precisar usar a sequencia
$produto3 = new Produto2(preco:36.50, nome:"Mouse");

//Mostrar dados qu estão no objeto
echo "Objeto - Produto1 - {$produto1->nome}<br>";
echo "Objeto - Produto2 - {$produto2->nome}<br>";


$produto3->Exibir();
$produto2->Exibir();

$produto4 = new Produto3(preco:500.00, nome:"Monitor");

//Mostrar dados qu estão no objeto
echo "Objeto - Produto4 - {$produto4->nome}<br>";

$produto4->Exibir();

echo $produto4->getNome(). "<br>";
$produto4->setNome("Monitor 2026");
echo $produto4->getNome();


echo $produto4->getPreco(). "<br>";
$produto4->setPreco(1200);
echo $produto4->getPreco();




/* echo "<pre>";
var_dump($produto2); //mostra todas as informações do objeto (atributos, tipos, etc).
echo "</pre>";

echo "<pre>";
var_dump($produto3); //mostra todas as informações do objeto (atributos, tipos, etc).
echo "</pre>"; */

?>