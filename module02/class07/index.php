<?php

require __DIR__ . '/../class06/functions.php';

echo "O código fonte destes exercícios você pode encontrar em: https://github.com/antonioArauj/estudosPHP <br />";

echo "<br />";

echo "EXERCÍCIOS COM WHILE";

echo "<br />";
echo "<br />";
echo "<br />";

echo "1. CRIE UM SCRIPT PARA ESCREVER TODA A TABUADA DO 5 (5X1 AO 5X10) COM WHILE. <br />";

$tabuadaAtual = 1;

while ($tabuadaAtual <= 10) {
  echo "5 x $tabuadaAtual = " . (5 * $tabuadaAtual)
    . "<br />";
  $tabuadaAtual++;
}

echo "<br />";
echo "<br />";

echo "2. CRIE UM SCRIPT PARA ESCREVER A SOMA DE TODOS OS NUMEROS DO 1 AO 20 COM WHILE. <br />";

$soma = 0;
$contador = 1;

while ($contador <= 20) {
  echo "$soma + $contador = " . ($soma + $contador) . "<br />";
  $soma = $soma + $contador;
  $contador++;
}

echo "<br />";
echo "<br />";


echo "EXERCÍCIOS COM FOR";

echo "<br />";
echo "<br />";
echo "<br />";

echo "1. CRIE UM SCRIPT QUE ESCREVA TODOS NÚMEROS DE 1 A 10 COM FOR. <br />";

echo "<br />";



for ($number = 1; $number <= 10; $number++) {
  echo "$number <br />";
}

echo "<br />";
echo "<br />";

echo "2. ESCREVA UM SCRIPT PHP QUE DESENHE MEIO TRIANGULO COM ASTERISCOS(*).
DE 10 LINHAS, EXEMPLO:  <br />
* <br />
** <br />
*** <br/>";

echo "<br />";

$output = null;
for ($i = 1; $i <= 10; $i++) {
  $output .= "*";
  echo $output . "<br />";
}

echo "<br />";
echo "<br />";


echo "EXERCÍCIOS COM FOREACH";

echo "<br />";
echo "<br />";
echo "<br />";

echo "1. CRIE UM ARRAY DE NÚMEROS E USE UM LOOP FOREACH PARA SOMAR TODOS OS ELEMENTOS E IMPRIMIR O RESULTADO.";

echo "<br />";
echo "<br />";


$numbers = [1, 2, 3, 4, 5];
$sum = 0;

foreach ($numbers as $number) {
  $sum += $number;
}
echo "O resultado é $sum <br />";

echo "<br />";
echo "<br />";

echo '2.CRIE UM ARRAY ASSOCIATIVO DE PRODUTOS COM NOME E PREÇO 
(POR EXEMPLO: ["PRODUTO1" => 10, "PRODUTO2" => 20, "PRODUTO3" => 30]) 
E USE UM LOOP FOREACH PARA IMPRIMIR O NOME E O PREÇO DE CADA PRODUTO.';

echo "<br />";
echo "<br />";

$fairProduct = [
  "tomate" => 2.50,
  "maçã" => 3.00,
  "banana" => 1.50,
  "cenoura" => 3.00
];

foreach ($fairProduct as $product => $price) {
  echo "O produto $product custa " . formattingForMonetaryValue($price) . "<br />";
}

echo "EXERCÍCIO EXTRA";

$shippingCart = [
  "Air Pods Pro" => [
    "price" => 1200,
    "quantity" => 2
  ],
  "Iphone 13" => [
    "price" => 8000,
    "quantity" => 1
  ]
];

$shippingCartTotal = 0;

foreach ($shippingCart as $product => $details) {
  $shippingCartTotal += $details["price"] * $details["quantity"];
}

echo "O valor total do carrinho é " . formattingForMonetaryValue($shippingCartTotal);
