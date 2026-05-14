<?php
    class Itens {
        public function __construct(
            private string $horario = "",
            private string $status = "",

            //Relação de associação, a classe itens tem um serviço e um prestador
            private ?Servico $servico = null,
            private ?Prestador $prestador = null,

            //Relação de composição, a classe itens tem uma agenda
            private ?Agenda $agenda = null
        ) {}

        public function getHorario() { return $this->horario; }
        public function setHorario($horario) { $this->horario = $horario; }

        public function getStatus() { return $this->status; }
        public function setStatus($status) { $this->status = $status; }

        public function getAgenda() { return $this->agenda; }
        public function setAgenda($agenda) { $this->agenda = $agenda; }

        public function getServico() { return $this->servico; }
        public function setServico($servico) { $this->servico = $servico; }

        public function getPrestador() { return $this->prestador; }
        public function setPrestador($prestador) { $this->prestador = $prestador; }
    }
?>