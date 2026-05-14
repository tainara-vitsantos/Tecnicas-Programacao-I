<?php

class Hotel {
    public function __construct(
        private string $nome = "",
        private string $endereco = "",
        private array $quartos = array()
    ) {}

    public function getNome() {
        return $this->nome;
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco(string $endereco) {
        $this->endereco = $endereco;
    }

    public function getQuartos() {
        return $this->quartos;
    }

    public function adicionarQuarto(Quarto $quarto) {
        $quarto->setHotel($this);
        $this->quartos[] = $quarto;
    }
}
