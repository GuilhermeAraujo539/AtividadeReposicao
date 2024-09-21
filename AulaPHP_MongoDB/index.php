<?php

require_once "Passageiro.php";
require_once "Motorista.php";
require_once "Pessoa.php";
require_once "Corrida.php";


    $Motorista = new Motorista();

    $Motorista->id = 1;
    $Motorista->nome = "Algusto";
    $Motorista->cnh = 124143532;
    $Motorista->setAvaliacao(5);
    $Motorista->historico = "15 corridas";


    $Passageiro = new Passageiro();

    $Passageiro->id = 1;
    $Passageiro->cpf = 287365872;
    $Passageiro->setAvaliacao(4.6);
    $Passageiro->historico = "15 corridas";


    $Corrida = new Corrida();
    
    $Corrida->id = 1;
    $Corrida->motorista = "Algusto";
    $Corrida->passageiro = "Marcelo e Rogério";
    $Corrida->end_partida = "Rua Fodona";
    $Corrida->end_destino = "Rua Bosta";
    $Corrida->valor = 12.00;
    $Corrida->mod_pagamento = "dinheiro";
    $Corrida->tipo_corrida = "Carro"
?>