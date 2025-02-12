<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Números inteiros</H1>
<?php
// Array com os 10 números inteiros
$numeros = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
echo "Os números inteiros são: " . implode(", ", $numeros) . "<br>";

// Variável para armazenar a soma dos números
$soma = 0;

// Laço para somar os 10 números
for ($i = 0; $i < 10; $i++) {
    $soma += $numeros[$i];
}

// Calculando a média
$media = $soma / 10;

// Exibindo o resultado
echo "A média dos números é: $media";
?>

</body>
</html>