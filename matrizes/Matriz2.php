<?php
/* Matriz com indices de colunas nomeadas e linhas ordenadas pq a linha não é usual mudar para nomeadas!*/

$matriz2 = array(
    array("nome" => "João",  "p1" => 7.5,  "p2" => 10.0, "t" => 9.0),
    array("nome" => "Maria", "p1" => 6.5,  "p2" => 5.5,  "t" => 2.5),
    array("nome" => "Paulo", "p1" => 10.0, "p2" => 5.0,  "t" => 10.0),
    array("nome" => "Pedro", "p1" => 9.5,  "p2" => 9.0,  "t" => 9.0),
    array("nome" => "Carla", "p1" => 7.5,  "p2" => 8.0,  "t" => 8.5)
);

echo "{$matriz2[0]['nome']}<br>";

foreach($matriz2 as $vetor){
   /* Caso nao tenha o segundo for, mostra em forma de vetor 
    var_dump($vetor);
    echo "<br>"; */

    foreach($vetor as $dado){
        echo "$dado<br>";
    }
    echo "<br>";
}
?>