<?php

/**
 * EXERCICIO 01
 * 1. Crie um array chamado Cidades contendo o nome de 5 cidades que você quer visitar
 * 2. Imprima na tela o valor da terceira cidade deste array
 */


$cities = ['Londres', 'Paris', 'Liverpool', 'Lyon', 'Bangkok']; 

echo $cities[3]; 

echo '<br /> <br />';

/**
 * EXERCICIO 02
 * 1. Crie um array associativo chamado $alunos onde as chaves são os nomes de três alunos e os valores são as idades deles
 * 2. Imprima a nota do segundo aluno
 */

$students = [
    'Alex' =>[
        'name' => 'Alex',
        'age' => 15,
        'finalNote' => 9.5,
        'room' => '1B'
    ],
     'Samara' =>[ 
        'name' => 'Samara',        
        'age' => 5,
        'finalNote' => 10,
        'room' => '1 ano Fundamental'
    ],
    'Lucas' => [
        'name' => 'Lucas', 
        'age' => 16,
        'finalNote' => 4,
        'room' => '1D'
    ]
];

function checkNote($students){
     return $students['finalNote'] >= 5 ? true : false; 
}

$selectedStudent = $students['Samara']; 
$isApproved = checkNote($selectedStudent);


echo $isApproved ? "{$selectedStudent['name']} sua nota é {$selectedStudent['finalNote']} e você foi aprovado." : "{$selectedStudent['name']} sua nota é {$selectedStudent['finalNote']} e você não foi aprovado.";

echo '<br /> <br />'; 


/**
 * EXERCICIO 03
 * 1. Crie um array chamado $cores contendo três cores
 * 2. Adicione uma nova cor ao final do array
 * 3. Remova a primeira cor do array
 * 4. Imprima o array resultante. 
 */


$colors = ['Preto', 'Azul', 'Vermelho'];

$removeColor = array_shift($colors); 
$insertColor = array_push($colors, 'Verde');



echo '<pre>';
var_dump($colors);
echo '</pre>';

echo '<br /> <br />'; 


/**
 * EXERCICIO 04
 * 1. Crie um array associativo chamado $precos onde as chaves são nomes de produtos e os valores são seus preços.
 * 2. Atualize o preço de um dos produtos adicionando + R$ 10.00
 * 3. Atualize o preço do primeiro produto reduzindo - R$ 1.00
 * 4. Imprima o array resultante
 */

$products = [
    'Samsung S23' => [
        'price' => 2000
    ],
    'Iphone 11' => [
        'price' => 1800
    ], 
    'Poco X6' => [
        'price' => 1685
    ]
];

$products['Iphone 11'] = $products['Iphone 11']['price'] - 1;    
$products['Poco X6']['price'] = $products['Poco X6']['price'] + 10;

echo '<pre>';
var_dump($products);
echo '</pre>';
