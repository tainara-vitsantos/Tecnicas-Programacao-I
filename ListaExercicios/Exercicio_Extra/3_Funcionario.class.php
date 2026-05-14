<?php

class Funcionario extends Pessoa {
    public function __construct(
        private string $carteira_profissional = "",
        string $nome = ""
    ) {
        parent::__construct($nome);
    }

    public function getCarteiraProfissional() {
        return $this->carteira_profissional;
    }

    public function setCarteiraProfissional(string $carteira_profissional) {
        $this->carteira_profissional = $carteira_profissional;
    }
}
