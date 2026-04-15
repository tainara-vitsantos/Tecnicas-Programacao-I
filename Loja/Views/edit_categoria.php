<?php
require_once "Header.php";
?>
<div class="content">
    <div class="container mt-3">

    <h1> Alterar Categoria</h1>
    <br><br>
    <form action="#" method="post">
    
    <input type="hidden" name="id_categoria" value="<?php echo $ret[0]->id_categoria ?>">

    <label>Altere o nome da categoria:</label>
    <input type="text" name="descritivo" value="<?php echo $ret[0]->descritivo ?>">

    <br><br>

    <input type="submit" value="Alterar" class="btn btn-primary">

    <div class="text-danger">
        <?php echo $msg; ?>
    </div>

</form>
    </div>
</div>
</body>

</html>