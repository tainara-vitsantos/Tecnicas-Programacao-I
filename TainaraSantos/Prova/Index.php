<!-- Instancie um objeto da classe Visita e mostre todos os dados desse objeto sem utilizar var_dump. -->

<?php

// Incluindo as classes necessárias
require_once "Veiculo.class.php";
require_once "Caminhao.class.php";
require_once "Van.class.php";
require_once "Rota.class.php";
require_once "Encomenda.class.php";
require_once "Motor.class.php";
require_once "Distribuicao.class.php";
require_once "Visita.class.php";

// Instanciando objetos 
$motor = new Motor("Gasolina","4000");
$caminhao = new Caminhao(10, "Carroceria", "FSN-1060", "NISSAN", 50000, $motor, array());
$distruibuicao = new Distribuicao("Centro de Ribeirão Preto", array());

$visita = new Visita("10/04/2026", 5000, "plataforma 2B", $caminhao, $distruibuicao);

// Mostrar os dados da Visita
echo "<h1>VISITA</h1><br>";

echo "Caminhao: {$visita->getCaminhao()->getPlaca()}<br>";
echo "Modelo: {$visita->getCaminhao()->getModelo()}<br>";
echo "Capacidade da Carga: {$visita->getCaminhao()->getCapacidadeCarga()}<br>";
echo "Eixos: {$visita->getCaminhao()->getEixos()}<br><br>";

echo "Data da visita: {$visita->getData()}<br>";
echo "Peso da visita: {$visita->getPeso()}<br>";
echo "Plataforma da visita: {$visita->getPlataforma()}<br><br>";

echo "Centro de distrubuição: {$visita->getDistribuicao()->getNome()}<br><br>";

echo "Combustivel do Caminhão: {$visita->getCaminhao()->getMotor()->getCombustivel()}<br>";
echo "Potencia do Caminhão: {$visita->getCaminhao()->getMotor()->getPotencia()}<br>";






?>