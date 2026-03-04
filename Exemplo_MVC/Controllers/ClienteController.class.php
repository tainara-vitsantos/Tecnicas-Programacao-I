<?php

class ClienteController
{


    function inserir() {}
    function alterar() {}
    function listarClientes()
    {
        require_once "Models/Cliente.class.php";
        $cliente = new Cliente();
        $retorno = $cliente->clientes;
        require_once "Views/ListarClientes.php";
    }
}

?>