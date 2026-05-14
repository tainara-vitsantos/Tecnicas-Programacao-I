<?php 
    class Shopping extends Pessoa {
        public function __construct(
            private string $cnpj = "",
            
            //Parametros para criar um shopping na herança
            string $nome = "",
            int $lote = 0,
            string $numero = "",
            array $proprietarios = array(),
            
            
        ) {
            //Chama o construtor da classe pai para inicializar o nome do shopping
            parent::__construct($nome);
            //Cria uma loja para o shopping, passando os parâmetros necessários para criar a loja
            $this->lojas[] =  new Loja($lote, $numero, $proprietarios);
        }

        public function getCnpj() { return $this->cnpj; }
        public function setCnpj($cnpj) { $this->cnpj = $cnpj; }

        public function getLojas() { return $this->lojas; }
        public function setLoja( ) {
           $this->lojas[] =  new Loja($lote, $numero, $proprietarios);
        }
    }
?>