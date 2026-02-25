<?php
/* Vetor com indice ordenado (0,1,2,3...) */
$vetor1 = array ("Carlos", 18, 1.75, true);

for($v=0; $v < 4; $v++)
{
    echo "{$vetor1[$v]}<br>";
}

foreach( $vetor1 as $variavel)
{
    echo "$variavel<br>";
}




?>