<?php
if ($_GET) {
    //outras rotas
    $controle = $_GET["controle"];
    $metodo = $_GET["metodo"];


    require_once "Controllers/{$controle}.class.php";
    $obj = new $controle();
    $obj->$metodo();//Executando o método
} else {

    /* Quem é o controlador / Rota Inicial */

    /* Incluindo a classe InicioController que está na pasta controller */
    require_once "Controllers/InicioController.class.php";

    //Criando o objeto usando o modelo (classe) InicioController na memória
    $obj = new InicioController();
    $obj->Inicio(); //Executando o método
}
