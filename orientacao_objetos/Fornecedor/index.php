<?php

require_once "Fornecedor.class.php";

//Criando objeto fornecedor
$fornecedor1 = new Fornecedor(
    razaoSocial: "Joao Silva 50731679881",
    cnpj: "41.202.148/0001-96",
    celular: "(14) 98805-5751",
    email: "snack@gmail.com"
);

//Mostrar dados
$fornecedor1->Exibir();

//Mostrando usando getter
echo "<br>Fornecedor: " . $fornecedor1->getRazaoSocial();

?>