<?php
require_once 'Ator.class.php';
require_once 'Filme.php';
require_once 'Atuacao.class.php';

//Instanciando um objeto da classe Ator, um objeto da classe Filme e um objeto da classe Atuacao para representar a relação entre eles 



//Criando atores
$ator1 = new Ator('Leonardo DiCaprio', 'Americano');

//Criando filmes
$filme1 = new Filme('Titanic', 1997);

//Criando atuações
$atuacao1 = new Atuacao('Jack Dawson', $ator1, $filme1);

//Exibindo od dados do objeto atuação
echo "Ator: {$atuacao1->getAtor()->getNome()}<br>";
echo "Nacionalidade: {$atuacao1->getAtor()->getNacionalidade()}<br>";
echo "Filme: {$atuacao1->getFilme()->getTitulo()}<br>";
echo "Ano: {$atuacao1->getFilme()->getAno()}<br>";
echo "Papel: {$atuacao1->getPapel()}<br>";

