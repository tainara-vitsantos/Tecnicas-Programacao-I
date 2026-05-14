<?php

    class Caminhao extends Veiculo {
        public function __construct(
            private int $eixos = 0,
            private string $carroceria = "",

            //Parametros para criar um Caminhao na herança
            string $placa = "",
            string $modelo = " ",
            float $capacidade_carga = 0.0,

            //Relação de composição bilateral
            private ?Motor $motor = null,

            private array $distribuicao = array()
            
        ) {
            //Chama o construtor da classe pai para inicializar os atributos herdados
            parent::__construct($placa, $modelo, $capacidade_carga);
        }

        //Metodos get e set 
        public function getEixos(){
            return $this->eixos; 
        }
        public function setEixos($eixos){
            $this->eixos = $eixos;
        }

        public function getCarroceria(){
            return $this->eixos; 
        }
        public function setCarroceria($carroceria){
            $this->carroceria = $carroceria;
        }

        public function getMotor(){
            return $this->motor;
        }

        public function setMotor($motor){
            $this->motor = $motor;
        }

        public function getDistribuicao() { 
            return $this->distribuicao; 
        }
        public function setDistribuicao($peso, $destinatario){
            $this->distribuicao[] = new Distribuicao($peso, $destinatario);
        }
    }
?>