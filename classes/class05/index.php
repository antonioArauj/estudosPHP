<?php


/*
EXERCICIO 1 

* Buscar a posição das palavras uva e pera, e escrever
 -- A palavra uva começa na posição x e pera na posição y
*/


//MINHA RESPOSTA
$frutas = 'Pera, uva, maçã, e salada mista'; 

$numeroCaracteres = strlen($frutas);

$posicaoUva = strpos($frutas, "uva");
$posicaoPera = strpos($frutas,"Pera");

echo "A palavra uva começa na posição $posicaoUva e pera na posição $posicaoPera"; 
echo '<br />';


/*
EXERCICIO 2
* Retirar apenas a palavra Pera, usando a função substr(). 
*/

$parteString = substr($frutas, 0, 4 ); 

echo $parteString;

// As repostas do professor são compativeis com as minhas. 