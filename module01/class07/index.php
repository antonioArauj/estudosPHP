<?php

// INTRODUÇÃO AOS ARRAYS NO PHP

$infoClient = [
    'Antonio' => [
        'Altura' => 1.80,
        'Idade' => 19, 
        'Nacionalidade' => 'Brasileiro'
    ],
    'Alex' => [
        'Altura' => 1.75,
        'Idade' => 15,
        'Nacionalidade' => 'Brasileiro' 
    ],
    'Maria' => [
        'Altura' => 1.65,
        'Idade' => 22,
        'Nacionalidade' => 'Brasileira'
    ],
    'João' => [
        'Altura' => 1.85,
        'Idade' => 30,
        'Nacionalidade' => 'Brasileiro'
    ]
];

echo '<pre>';
var_dump($infoClient['Antonio']['Idade']);
echo '</pre>'; 