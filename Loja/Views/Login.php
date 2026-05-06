<?php

require_once "Header.php";
?>

<div class="content">
    <div class="conatiner">
        <h1>Login</h1>
        <div class="text-danger">
            <?php
            echo $msg[2];
            ?>
        </div>
        <form action="#" method="post">
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <!-- Mostrar falta de preenchimento do descritivo caso ocorra *** Erro *** -->
        <div class="text-danger">
                    <?php
                    echo $msg[0];
                    ?>
                </div>
        <div>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
        </div>
        <!-- Mostrar falta de preenchimento do descritivo caso ocorra *** Erro *** -->
        <div class="text-danger">
                    <?php
                    echo $msg[1];
                    ?>
                </div>
        <a href="">Esqueceu a senha</a>
        <div>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </div>
        </form>
    </div>
</div>