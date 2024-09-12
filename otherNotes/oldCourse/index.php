<?php
// OBS: Todas anotaçoes abaixo são de um curso anterior. 

/*
 $ingredientes = [
     'Ovo',
     'Farinha de trigo',
     'Leite',
     'Fermento em pó',
     'Açucar'
 ]; 

 echo '<h2> Ingredientes do Bolo</h2>'; 

  echo '<ul>';
  foreach($ingredientes as $chave => $valor) {
      echo '<li>'.$valor.'</li>'; 
  }
  echo '</ul>';

  for ($n=0;$n<10;$n++){
      for ($i=0;$i<10;$i++) {
          echo "-";
      }
  echo "<br/>";
  }

  for($r=1; $r<20;){
      for($c=0; $c<20; $c++){
          echo "?";
      }
   echo"<br/>";
  };

 $output = null;
 for ($r = 0; $r < 20; $r++) {
     $output .= "-";
     echo $output .'<br/>';
 }


 $lista = [10, 25, 3];

 print_r($lista); 


 function subsequente(){
     for($q=0; $q<10; $q++){
         echo "teste"."<br/>";
     }
 }

 for($r=0; $r<20; $r++){
     subsequente();
 }

 function somar($n1, $n2) {
     $total = $n1 + $n2;
     return $total;
 }

 $soma = somar(100, 50); 

 echo "A soma da conta é:" . $soma;



  Arrow Function 

  $dizimo = fn($valor) => $valor * 0.1; 

 echo $dizimo(992); 


 $teste = function(string $nome, string $sobrenome){
     return $nome . $sobrenome; 
 }; 

 $usuario = $teste('Antonio ', 'Araujo'); 

 echo "seu nome completo é: ".$usuario; 

 function dividir($numero) {
     $metade  = $numero /2;
     echo $metade."<br/>";

     if(round($metade) > 0){
         dividir($metade);
     }
 }

 dividir(1000); 

 $numero = 6.5;

 echo ceil($numero);


 $nomeCompleto = 'Jean';

 $nomeAlterado = str_replace('Antonio', 'Monica', $nome); 

 echo $nomeAlterado; 

 $posicao = strpos($nomeCompleto, 'o');
 if ($posicao > false) {
     echo "ACHOU ";
 } else {
     echo "NÃO ACHOU";
 };

 echo $posicao;
*/