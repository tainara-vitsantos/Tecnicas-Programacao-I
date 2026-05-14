<?php

    class Agenda {
        public function __construct(
            private string $data,

            //Relação de Associação, a classe agenda tem um cliente
            private ?Cliente $cliente = null,

            //Relação de composição, a classe agenda tem itens
            private array $itens = array(),
            //Parametros para criar um item na composição
            string $horario = "",
            string $status = "",
            
            //Relação de associação, a classe itens tem um serviço e um prestador
            ?Servico $servico = null,
            ?Prestador $prestador = null
        )
        {
            $this->itens[] = new Itens($horario, $status, $servico, $prestador);
        }

        public function getData() { return $this->data; }
        public function setData($data) { $this->data = $data; }

        public function getItens() { return $this->itens; }
        public function setItens($horario, $status, $servico, $prestador ){
            $this->itens[] = new Itens($horario, $status, $servico, $prestador);
        }
        public function getCliente() { return $this->cliente; }
        public function setCliente($cliente) { $this->cliente = $cliente; }
    }
?>