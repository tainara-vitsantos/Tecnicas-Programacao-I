<?php
    require_once "header.php";
?>
<div class="content">
<div class="container">
<div>
    <?php
        if($_GET && isset($_GET["msg"]))
        {
            echo "<h3>{$_GET['msg']}</h3>";
        }
    ?>
</div>
<br>
<a href="index.php?controle=CategoriaController&metodo=inserir" 
        class="btn btn-primary">Nova Categoria</a>
</br></br>
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Descritivo</th>
        <th>Ações</th>
    </tr>
    <?php
        foreach($retorno as $dado){
            echo "<tr>";
            echo "<td>{$dado->id_categoria}</td>";
            echo "<td>{$dado->descritivo}</td>";
            echo "<td>
                    <a class='btn btn-danger' href='index.php?controle=CategoriaController&metodo=excluir&id={$dado->id_categoria}'>Excluir</a>
            </td>";
            echo "</tr>";
        }
    ?>
</table>
</div>
</div>
</body>
</html>