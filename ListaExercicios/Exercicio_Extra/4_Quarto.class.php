<?php

class Quarto {
    public function __construct(
        private int $numero = 0,
        private int $andar = 0,
        private string $status = "Livre",
        private ?Hotel $hotel = null,
        private array $reservas = array()
    ) {}

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero(int $numero) {
        $this->numero = $numero;
    }

    public function getAndar() {
        return $this->andar;
    }

    public function setAndar(int $andar) {
        $this->andar = $andar;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus(string $status) {
        $this->status = $status;
    }

    public function getHotel() {
        return $this->hotel;
    }

    public function setHotel(Hotel $hotel) {
        $this->hotel = $hotel;
    }

    public function getReservas() {
        return $this->reservas;
    }

    public function adicionarReserva(Reserva $reserva) {
        $this->reservas[] = $reserva;
    }
}
