<?php
//Calcular a media dos alunos


$matriz1 = array(
    array("João", 7.5, 10.0, 9.0),
    array("Maria", 6.5, 5.5, 2.5),
    array("Paulo", 10.0, 5.0, 10.0),
    array("Pedro", 9.5, 9.0, 9.0),
    array("Carla", 7.5, 8.0, 8.5)
);


for($linha = 0; $linha < count($matriz1); $linha++){

    $soma = 0;

    // começa em 1 porque 0 é o nome
    for($coluna = 1; $coluna < count($matriz1[$linha]); $coluna++){
        $soma += $matriz1[$linha][$coluna];
    }

    $media = $soma / 3; // são 3 notas

    echo "Aluno: " . $matriz1[$linha][0] . "<br>";
    echo "Média: " . number_format($media, 2) . "<br><br>";
}
?>


