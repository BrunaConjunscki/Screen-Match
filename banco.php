<?php

$saldo = 0;
$titularConta = 'Bruna Conjunscki';

echo "**********\n";
echo "Titular: $titularConta\n";
echo "Saldo atual: R$ $saldo\n";
echo "**********\n";

do{
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";

    $opcao =  (int) fgets(STDIN); // variável que recebe a entrada do user

    switch  ($opcao) {
        case 1 : 
            echo "**********\n";
            echo "Saldo atual: R$ $saldo\n";
            echo "**********\n";
            break;

        case 2 : 
            echo "Qual valor deseja sacar?\n";
            $valorASacar = (float) fgets(STDIN);
            
            if ($valorASacar > $saldo){
                echo "Saldo insuficiente\n";
            } else {
                $saldo -= $valorASacar;
                echo "Saque realizado com sucesso. Saldo atual: R$ $saldo\n";
            }
            break;

        case 3 : 
            echo "Qual valor deseja depositar?\n";
            $valorADepositar = (float) fgets(STDIN);
            $saldo += $valorADepositar;
            echo "Depósito realizado com sucesso. Saldo atual: R$ $saldo\n";
            break;

        case 4 : 
            echo "**********\n";
            echo "Até logo! $titularConta\n";
            echo "**********\n";
            break;
        
        default: 
            echo "Opção Inválida/n";
            break;
    }
} while ($opcao != 4);
