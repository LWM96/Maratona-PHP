<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
</head>

<form action="index.php" method="get">

<h2> Calculadora Simples</h2>

</form>

<body>

<?php 


/* Objetivo: Usar operadores matemáticos e declaração de variáveis.

Descrição: Crie um script que receba dois números e calcule a soma, subtração, multiplicação e divisão desses números. Exiba os 
resultados na tela.

Dica: Utilize variáveis para armazenar os números e os resultados das 
operações. */

$n1 = 20;
$n2 = 10;

$soma = $n1 + $n2;
$sub = $n1 - $n2;
$mult= $n1 * $n2;
$div = $n1 / $n2;

echo "O resultador de $n1 + $n2 = $soma <br>";
echo "O resultador de $n1 - $n2 = $sub <br>";
echo "O resultador de $n1 * $n2 = $mult <br>";
echo "O resultador de $n1 / $n2 = $div <br>";

?>
    
</body>
</html>