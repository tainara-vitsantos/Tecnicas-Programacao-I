<?php

require_once "Header.php";
?>

<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Descritivo</th>
    </tr>
    <?php
    foreach ($retorno as $dado){
        echo "<tr>";
        echo "<td>{$dado->id_categoria}</td>";
        echo "<td>{$dado->descritivo}</td>";
        echo "</tr>";
    }
    ?>
</table>