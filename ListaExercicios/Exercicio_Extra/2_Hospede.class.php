<?php 

//Hospede é a classe filha, herda da classe Pessoa
    class Hospede extends Pessoa {
        public function __construct(
            private string $cpf = "",
            private array $reservas = array(),

            //Parametros para criar um proprietário na herança
            string $nome = "",

        ) {
            //Chama o construtor da classe pai para inicializar o nome
            parent::__construct($nome);
        }

        //Getters e Setters para o cpf
        public function getCpf() { return $this->cpf; }
        public function setCpf($cpf) { $this->cpf = $cpf; }

        public function getReservas() {
            return $this->reservas;
        }

        public function adicionarReserva(Reserva $reserva) {
            $this->reservas[] = $reserva;
        }
    }
?>