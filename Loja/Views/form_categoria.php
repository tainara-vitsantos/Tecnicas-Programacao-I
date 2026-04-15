<?php
require_once "Header.php";
?>
<div class="content">
    <div class="container mt-3">

    <h1> Nova Categoria</h1>
    <br><br>
        <form action="#" method="post">
            <label>Digite o nome da categoria:</label>
            <input type="text" name="descritivo">
            <br><br>
            <input type="submit" value="Cadastrar" class="btn btn-primary">
            <!-- Mostrar falta de preenchimento do descritivo caso ocorra *** Erro *** -->
            <div class="text-danger">
                <?php
                echo $msg;
                ?>
            </div>


        </form>
    </div>
</div>
</body>

</html>