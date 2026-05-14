<?php

require_once "1_Pessoa.class.php";
require_once "2_Hospede.class.php";
require_once "3_Funcionario.class.php";
require_once "4_Quarto.class.php";
require_once "5_Hotel.class.php";
require_once "6_Reserva.class.php";

// Criando os objetos do sistema hoteleiro
$hospede = new Hospede("12345678900", "Leonardo Costa");
$funcionario = new Funcionario("987654321", "Mariana Silva");

$hotel = new Hotel("Hotel Estrela", "Rua das Flores, 100");
$quarto101 = new Quarto(101, 1, "Disponível");
$quarto102 = new Quarto(102, 1, "Disponível");

$hotel->adicionarQuarto($quarto101);
$hotel->adicionarQuarto($quarto102);

$reserva = new Reserva("13/05/2026", "17/05/2026", $hospede, $funcionario, $quarto101);

// Exibindo dados da reserva
echo "Reserva:<br>";
echo "Data de Entrada: {$reserva->getDataEntrada()}<br>";
echo "Data de Saída: {$reserva->getDataSaida()}<br>";
echo "Hóspede: {$reserva->getHospede()->getNome()}<br>";
echo "CPF: {$reserva->getHospede()->getCpf()}<br>";
echo "Funcionário: {$reserva->getFuncionario()->getNome()}<br>";
echo "Carteira Profissional: {$reserva->getFuncionario()->getCarteiraProfissional()}<br>";
echo "Quarto: {$reserva->getQuarto()->getNumero()} - Andar {$reserva->getQuarto()->getAndar()}<br>";

echo "<br>Hotel:<br>";
echo "Nome: {$hotel->getNome()}<br>";
echo "Endereço: {$hotel->getEndereco()}<br>";
echo "Quartos do Hotel:<br>";
foreach ($hotel->getQuartos() as $quarto) {
    echo "- Quarto {$quarto->getNumero()} (Andar {$quarto->getAndar()}), Status: {$quarto->getStatus()}<br>";
}

echo "<br>Histórico de reservas do Quarto 101:<br>";
foreach ($quarto101->getReservas() as $historico) {
    echo "Reserva de {$historico->getHospede()->getNome()} de {$historico->getDataEntrada()} até {$historico->getDataSaida()}<br>";
}

echo "<br>Reservas do hóspede {$hospede->getNome()}:<br>";
foreach ($hospede->getReservas() as $reservaHospede) {
    echo "Quarto {$reservaHospede->getQuarto()->getNumero()} de {$reservaHospede->getDataEntrada()} até {$reservaHospede->getDataSaida()}<br>";
}
