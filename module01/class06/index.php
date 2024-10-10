<?php

//Decidi me desafiar um pouco aqui, antes de iniciar a aula. 

$amountClients = 100;
$amountTickets = 200; 


function sum($n1, $n2){
    $total = ($n1 + $n2) / 1.5;
    return $total;
};


$estimatedClients = sum($amountClients, $amountTickets);

echo 'A quantidade de clientes estimada é: '.$estimatedClients;


//OBS: essa aula não teve um exercício