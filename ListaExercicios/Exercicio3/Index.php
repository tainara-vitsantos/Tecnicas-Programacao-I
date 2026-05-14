<?php

    require_once "1_Pessoa.class.php";
    require_once "2_Cliente.class.php";
    require_once "3_Prestador.class.php";
    require_once "4_Agenda.class.php";
    require_once "5_Itens.class.php";
    require_once "6_Servico.class.php";


    //Criando os objetos e relacionando-os
    $cliente = new Cliente("Maiara da Silva", "(14)99999999", "111.111.111-11");
    $servico = new Servico("Instalação de Armário", 250.70);
    $prestador = new Prestador("Jorge Corbelo", "(14)97867777", "Marcenaria");
    $agenda = new Agenda("05/05/2026", $cliente, "10:00", "Ativo", $servico, $prestador);
    $servico2 = new Servico("Trocar Telhas quebradas", 150.00);
    $prestador2 = new Prestador("Clóvis Arruda", "(14)97777777", "Serviços Gerais");
    $servico3 = new Servico("Fazer orçamento para armario da área de serviço", 0.00);
    $agenda->setItens("11:00", "Cancelado", $servico2, $prestador2 );
    $agenda->setItens("12:00", "Ativo", $servico3, $prestador);

  //Exibindo os dados da agenda
    echo "<h1>AGENDA</h1><br>";
    echo "Data: {$agenda->getData()}<br>";
    echo "Cliente: {$agenda->getCliente()->getNome()} - Celular: {$agenda->getCliente()->getCelular()} - CPF: {$agenda->getCliente()->getCpf()}<br>";
    echo "<h2>ITENS DA AGENDA</h2>";
    foreach($agenda->getItens() as $indice=>$item){
        
        echo "<h3>ITEM " . $indice + 1 . "</h3>";
        echo "Horário: {$item->getHorario()}<br>";
        echo "Status: <span style='font-weight:bold'>{$item->getStatus()}</span><br>";
        echo "<h4>SERVIÇO</h4>";
        echo "Descritivo: {$item->getServico()->getDescritivo()}<br>";
        echo "Preço: R$ " . number_format($item->getServico()->getPreco(),2,",", ".") . "<br>";
        echo "<h4>PRESTADOR DO SERVIÇO</h4>";
        echo "Nome: {$item->getPrestador()->getNome()} - Celular: {$item->getPrestador()->getCelular()} - Especialidade: {$item->getPrestador()->getEspecialidade()}<br>";
        echo "<br>-----------------------------------------------------------------------------------------------------------------------------<br>";
    }
    
?>