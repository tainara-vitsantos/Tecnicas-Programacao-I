<?php 
/* Se o dolar get existir vai rodar true ou false  */
/* if($_GET== true) if(!$_GET) */

/* $salario_minimo = 1200.90;
$situacao = true;
$x = 1;
$x = "vania";
$x1 = "Pedro"; */


if($_GET){ 
// $nome = $_GET["nome"];
//if($_GET['nome'] == " ")
if(empty ($_GET['nome']))
{ /* Se estiver vazio */
    echo "Voce não preencheu o nome";
}
else
{
echo "<h1 style='color:red;'> Nome: {$_GET['nome']}<br></h1>"; /* pode usar chaves ou o .  */ 
}

    echo "<h1>CPF:" . $_GET['cpf'] . "</h1>"; /* Ponto é a concatenação {} */
    if(!isset($_GET["genero"])) /* Se esta setado */
    {
        echo "Escolha um genero";
    }
    else
    {
        echo "<h1> Genero:" .$_GET["genero"]. "</h1>"; 
    }
}


else
{
    header("location:index.html");
}

?>