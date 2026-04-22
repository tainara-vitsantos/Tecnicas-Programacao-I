<?php
	class Cliente 
    {
        public function __construct(
            private string $nome = "",
            private string $cpf = "",
            private array $celulares = array(),
            int $ddd = 0,
            string $numero = ""
        ){
            $this->celulares[] = new Celular($ddd, $numero);
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function getCpf()
        {
            return $this->cpf;
        }

        public function getCelular()
        {
            return $this->celulares;
        }

         public function setNome(string $nome)
        {
            $this->nome = $nome;
        }

        public function setCpf(string $cpf)
        {
            $this->cpf = $cpf;
        }

        public function setCelular(int $ddd, string $numero)
        {
            $this->celulares[] = new Celular($ddd, $numero);
        }

        
}
?>