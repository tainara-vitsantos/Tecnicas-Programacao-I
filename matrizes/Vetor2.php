<?php
/* Vetor com indices nomeados (nomes) */


//  Primeiro indice depois o valor
$estados = array("SP"=>"SÃO PAULO", "MG"=>"MINAS GERAIS", "PR"=>"PARANA", "SC"=>"SANTA CATARINA");

foreach($estados as $ind=>$valor){
    echo "$valor($ind)<br>";
}

?>