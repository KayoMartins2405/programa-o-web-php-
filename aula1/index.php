<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>olá mundo!</h1>
<hr>
<?php
  $nome = "Kayo";
  $nome2 = "neymar";
   $idade = 20;
   $peso = 80.45;
   
   
    echo "olá mundo!";
    echo "<h1> teste </h1>";
    echo $nome;
    echo $nome2;
    echo $idade;
    echo $peso;
    
    echo "texto" . $nome;
    //comentáio de uma linha
    /*comentário
    de
    várias
    linhas
    */

// no php o símbolo de . é para concatenação


echo "texto $nome";
echo "<br />";
echo "<br />Nome: $nome idade: $idade peso: $peso";
echo"<br />";
echo "<br />nome: $nome<br /> idade: $idade<br/ > peso: $peso ";

echo 'texto:' . $nome;

//operadores aritméticos + - * / %
echo "<br /> <br /> <br />";

$n1 = 8;
$n2 = 2;
$soma = $n1 + $n2;
$subtracao = $n1 - $n2;
$multiplicacao = $n1 * $n2;
$divisao = $n1 / $n2;

echo "<br />resultado da soma é: $soma";
echo "<br />resultado da subtração é: $subtracao";
echo "<br />resultado da multiplicação é: $multiplicacao";
echo "<br />resultado da divisão é: $divisao";

//saída
echo "<p> $n1 + $n2 = $soma </p>";
echo "<p> $n1 + $n2 = $subtracao </p>";
echo "<p> $n1 + $n2 = $multiplicacao </p>";
echo "<p> $n1 + $n2 = $divisao </p>";



?>


</body>
</html>