<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de Desconto</title>
</head>

<h2>Calculador de Desconto</h2>

<body>
    
<?php 

/*Objetivo: Cálculos matemáticos e uso de variáveis.

Descrição: Crie um script que calcule o valor do desconto de um 
produto, dado o preço original e a porcentagem de desconto. Exemplo 
de fórmula:
 
Dica: Use variáveis para armazenar o preço e a porcentagem do 
desconto e calcule o valor final*/


$DESC = 0.15;

$VALPR = 2500;

$RSCO = number_format($VALPR, 2, ",", ".");

$VCD = $VALPR - ($VALPR * $DESC);

$VCDCON = number_format($VCD, 2, ",", ".");

echo "O produto que custaria R$ $RSCO, após desconto de 15% custará R$ $VCDCON.";

?>

</body>
</html>