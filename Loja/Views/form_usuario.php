<?php

require_once "Header.php";
?>

<div class="content">
    <div class="conatiner">
        <form action="#" method="post">
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </div>
            <!-- Mostrar falta de preenchimento do descritivo caso ocorra *** Erro *** -->
            <div class="text-danger">
                    <?php
                    echo $msg[0];
                    ?>
                </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <!-- Mostrar falta de preenchimento do descritivo caso ocorra *** Erro *** -->
        <div class="text-danger">
                    <?php
                    echo $msg[1];
                    ?>
                </div>

        <div>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
        </div>
        <!-- Mostrar falta de preenchimento do descritivo caso ocorra *** Erro *** -->
        <div class="text-danger">
                    <?php
                    echo $msg[2];
                    ?>
                </div>

        <div>
            <label for="confirme">Confirme a senha: </label>
            <input type="password" value="confirme" id="confirme">
        </div>
        <!-- Mostrar falta de preenchimento do descritivo caso ocorra *** Erro *** -->
        <div class="text-danger">
                    <?php
                    echo $msg[3];
                    ?>
                </div>
        <div>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </div>
        </form>
    </div>
</div>