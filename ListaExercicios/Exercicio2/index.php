<!-- 2- Instancie um objeto da classe Avaliação e mostre todos os dados desse objeto sem utilizar var_dump. -->

<?php
require_once "Pessoa.class.php";
require_once "Chef.class.php";
require_once "Avaliação.class.php";
require_once "Telefone.class.php";
require_once "Avaliador.class.php";
require_once "Receita.class.php";


$chef = new Chef("11111111", "João da Silva", array(), 14, "9999999999");
$avaliador = new Avaliador("22222222", "Maria Oliveira", array(), 14, "5555555555");
$receita = new Receita("Bolo de Chocolate", "Delicioso bolo de chocolate com cobertura de brigadeiro", array("Farinha", "Açúcar", "Cacau", "Ovos"), 60);

//Instanciar um objeto Avaliação
$avaliacao = new Avaliação(5, "Excelente receita! O bolo ficou muito saboroso e fácil de fazer.", $chef, $avaliador, $receita); 

//Mostrar dados do objeto Avaliação
echo "Avaliação: <br>";
echo "Nota: {$avaliacao->getNota()}<br>";
echo "Chef: <br>";
echo "Nome: {$avaliacao->getChef()->getNome()}<br>";
echo "CPF: {$avaliacao->getChef()->getCpf()}<br>";
foreach($avaliacao->getChef()->getTelefones() as $telefone){
    echo "({$telefone->getDdd()}) {$telefone->getNumero()}<br>";
}
echo "Avaliador: <br>";
echo "Nome: {$avaliacao->getAvaliador()->getNome()}<br>";
echo "CPF: {$avaliacao->getAvaliador()->getCpf()}<br>";
foreach($avaliacao->getAvaliador()->getTelefones() as $telefone){
    echo "({$telefone->getDdd()}) {$telefone->getNumero()}<br>";
}
echo "Receita: <br>";
echo "Nome: {$avaliacao->getReceita()->getNome()}<br>";
echo "Ingredientes: {$avaliacao->getReceita()->getIngredientes()}<br>";
foreach($avaliacao->getReceita()->getAvaliadores() as $avaliador){
    echo "Avaliador: {$avaliador->getNome()}<br>";
}   


