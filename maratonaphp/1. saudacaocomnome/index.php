<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudação com Nome</title>
</head>
<body>
    
</body>
</html>

<h1> Saudação com Nome </h1>

<br>

<h4> Concatenado e Interpolado na mesma string:</h4>

<?php 

/* Objetivo: Declarar variáveis, usar concatenação e interpolação.

Descrição: Crie um script que declare uma variável para o nome de 
uma pessoa e exiba uma saudação personalizada, por exemplo: "Olá, 
João! Bem-vindo ao nosso site!".

Dica: Utilize tanto a concatenação (.) quanto a interpolação dentro de 
uma string com aspas duplas. */


$nome = "Victor";
$nome2 = "Lucas";
$cidade =  "São Paulo"; 

$saudacao = "Bem-vindo";

echo "Olá, " . $nome2 . "! $saudacao ao nosso site!";

echo "<br>";

?>

<h4> Concatenado:</h4>

<?php 

echo "Olá, " . $nome . "!" . " Eu sou o " . $nome2 . " e moro em " . $cidade . ".";

?>

<h4> Interpolado:</h4>

<?php 

echo "Olá, $nome2! eu também sou de $cidade."

?>

</body>
</html>