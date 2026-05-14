<?php 
    class Loja {
        //Esta fora do construtor porque uma loja pode ter mais de um condomínio, então é necessário criar um array para armazenar os condomínios da loja, e não é necessário passar os condomínios como parâmetro no construtor, porque uma loja pode ser criada sem condomínios, e depois os condomínios podem ser adicionados posteriormente, usando o método setCondominio() para adicionar um condomínio ao array de condomínios da loja
        private array $condominios = []; 

        public function __construct(
            private int $lotes = 0,
            private string $numero = "",

            //Atributo para armazenar os proprietários da loja, é um array porque uma loja pode ter mais de um proprietário
            private array $proprietarios = array(),

            //Atributo para armazenar o shopping da loja, é um objeto da classe Shopping, porque uma loja pertence a 1 shopping
            private ?Shopping $shopping = null,

        ) {}

        public function getLotes(): int { return $this->lotes; }
        public function setLotes(int $lotes): void { $this->lotes = $lotes; }

        public function getNumero(): string { return $this->numero; }
        public function setNumero(string $numero): void { $this->numero = $numero; }

        public function getShopping() { return $this->shopping; }
        public function setShopping($shopping) { $this->shopping = $shopping; }

        public function getProprietarios() { return $this->proprietarios; }
        public function setProprietarios($proprietario) { $this->proprietarios[] = $proprietario; }

    }
?>