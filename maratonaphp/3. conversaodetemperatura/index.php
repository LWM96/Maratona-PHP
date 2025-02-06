<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Temperatura(Celcius para fahremheit)</title>
</head>

<h2>Conversão de Temperatura (Celcius para fahremheit)</h2>

<body>

<?php 

/*Objetivo: Trabalhar com cálculos matemáticos e variáveis.

Descrição: Crie um script que converta uma temperatura em Celsius 
para Fahrenheit. A fórmula para conversão é: F = C X 9/5) + 32

Dica: Declare uma constante para armazenar o valor 9/5 e faça o 
cálculo com a variável fornecida.*/

$C = 25;

const divi = 9/5;

$F = $C * divi + 32;

echo "$C" . "° Celsius" . " em fahrenheit é igual a $F" . "°";

?>
    
</body>
</html>