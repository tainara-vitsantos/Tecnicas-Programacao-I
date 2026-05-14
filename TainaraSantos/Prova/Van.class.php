<?php

    class Van extends Veiculo {
        public function __construct(
            private bool $rampa = true,
            private float $volume = 0.00,

            //Parametros para criar uma Van na herança
            string $placa = "",
            string $modelo = " ",
            float $capacidade_carga = 0.00,

            //A classe Van tem Rotas
            private array $rotas = array(),

            //A classe Van tem Encomendas
            private array $encomendas = array(),
        ) {
            //Chama o construtor da classe pai para inicializar os atributos herdados
            parent::__construct($placa, $modelo, $capacidade_carga);
        }

        //Metodos get e set 
        public function getRampa(){
            return $this->rampa; 
        }
        public function setRampa($rampa){
            $this->rampa = $rampa;
        }

        public function getVolume(){
            return $this->rampa; 
        }
        public function setVolume($volume){
            $this->volume = $volume;
        }


        public function getRotas() { 
            return $this->rotas; 
        }
        public function setRotas($inicio, $fim){
            $this->rotas[] = new Rotas($inicio, $fim);
        }

        public function getEncomendas() { 
            return $this->encomendas; 
        }
        public function setEncomendas($peso, $destinatario){
            $this->encomendas[] = new Encomendas($peso, $destinatario);
        }
    }
?>