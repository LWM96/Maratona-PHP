<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo Bancário</title>
</head>

<h2>Empréstimo Bancário</h2>

<body>
    
<?php 


/*Objetivo: Cálculos financeiros e declaração de variáveis.

Descrição: Crie um script que calcule o valor de uma parcela de um 
empréstimo, dado o valor total do empréstimo, a taxa de juros e o 
número de parcelas. Exemplo de fórmula:
 
Dica: Utilize variáveis para o valor do empréstimo, a taxa de juros e o 
número de parcelas.*/


$VE = 20000;

$TJ = 0.05;

$P = 24;

$VT = ($VE * (1 + $TJ)) / $P;

echo "O valor da parcela é $VT"

?>

</body>
</html>