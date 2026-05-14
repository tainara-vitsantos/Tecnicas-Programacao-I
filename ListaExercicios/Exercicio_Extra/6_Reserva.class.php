<?php

class Reserva {
    public function __construct(
        private string $data_entrada = "",
        private string $data_saida = "",
        private ?Hospede $hospede = null,
        private ?Funcionario $funcionario = null,
        private ?Quarto $quarto = null
    ) {
        if ($this->quarto !== null) {
            $this->quarto->adicionarReserva($this);
        }

        if ($this->hospede !== null) {
            $this->hospede->adicionarReserva($this);
        }
    }

    public function getDataEntrada() {
        return $this->data_entrada;
    }

    public function setDataEntrada(string $data_entrada) {
        $this->data_entrada = $data_entrada;
    }

    public function getDataSaida() {
        return $this->data_saida;
    }

    public function setDataSaida(string $data_saida) {
        $this->data_saida = $data_saida;
    }

    public function getHospede() {
        return $this->hospede;
    }

    public function setHospede(Hospede $hospede) {
        $this->hospede = $hospede;
        $this->hospede->adicionarReserva($this);
    }

    public function getFuncionario() {
        return $this->funcionario;
    }

    public function setFuncionario(Funcionario $funcionario) {
        $this->funcionario = $funcionario;
    }

    public function getQuarto() {
        return $this->quarto;
    }

    public function setQuarto(Quarto $quarto) {
        $this->quarto = $quarto;
        $this->quarto->adicionarReserva($this);
    }
}
