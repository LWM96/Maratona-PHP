<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
</head>

<h2>Conversor de Moeda</h2>

<body>

<?php 

/*Objetivo: Trabalhar com variáveis, operadores e arredondamento.

Descrição: Crie um script que converta uma quantia em reais para 
dólares, com base em uma taxa de câmbio fornecida. Mostre o valor 
convertido com 2 casas decimais.

Dica: Use round() para arredondar o valor para 2 casas decimais.*/


$RS = 150;

$DOL = 5.91;

$CONVER = $RS / $DOL;

$valorConDec = number_format ($CONVER, 2);

echo "R$ $RS em dólar é equivalente a $" . $valorConDec;

?>
    
</body>
</html>