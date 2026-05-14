<?php

    require_once "1_Pessoa.class.php";
    require_once "2_Proprietario.class.php";
    require_once "4_Shopping.class.php";
    require_once "3_Loja.class.php";
    require_once "5_Condominio.class.php";

    //Criando os objetos para testar as classes e a herança
    $proprietario1 = new Proprietario("Marcos Vilela", "111.111.111-11");
    $proprietario2 = new Proprietario("Carolina Vilela", "222.222.222-22");
    $shopping = new Shopping("Jahu Boulevard", "11.111.111/0001-11" );
    $loja = new Loja(2, "P12", array($proprietario1, $proprietario2), $shopping );

    $condominio = new Condominio("05/05/2026", 540, "10/05/2026", $loja);


    //mostrando os dados do condomínio

    echo "<h1>CONDOMÍNIO</h1>";
    echo "<h2>SHOPPING</h2>";
    echo "Nome: {$condominio->getLoja()->getShopping()->getNome()} - CNPJ: {$condominio->getLoja()->getShopping()->getCnpj()}<br>";
    echo "<h3>Loja</h3>";
    echo "Lotes: {$condominio->getLoja()->getLotes()} - Número: {$condominio->getLoja()->getNumero()}<br>";
    echo "<h4>Proprietários</h4>";
    foreach($condominio->getLoja()->getProprietarios() as $indice=>$proprietario){
        echo "<h5>Proprietário" . $indice + 1 . "</h5><br>";
        echo "Nome: {$proprietario->getNome()} - CPF: {$proprietario->getCpf()}<br>";
        echo "<br>--------------------------------------------------------<br>";
    }
    echo "<h3>Condomínio da Loja</h3>";
    echo "Data da Geração: {$condominio->getDataGeracao()}<br>";
    echo "Data do Pagamento:{$condominio->getDataPagamento()}<br>";
    echo "Valor: R$ " . number_format($condominio->getValor(), 2, ",", ".") . "<br>";
?>