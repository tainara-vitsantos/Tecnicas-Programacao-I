<?php
    require_once "header.php";
?>
<div class="content">
    <div class="container">
        <h1>Nova Categoria</h1>
        <br><br>
        <form action="#" method="post">
            <label>Digite o nome da categoria:</label>
            <input type="text" name="descritivo">
            <!--Mostrar falta de preenchimento do descritivo,
                caso ocorra-->
            <div class="text-danger">
                <?php 
                    echo $msg;
                ?>
            </div>
            <br><br>
            <input type="submit" value="Cadastrar" class="btn btn-primary">
            
        </form>
    </div>
</div>
</body>
</html>