<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressão de Dados do Usuário</title>
</head>

<h2>Impressão de Dados do Usuário</h2>

<body>

<?php 

/*Objetivo: Concatenar e interpolar dados.

Descrição: Crie um script que solicite ao usuário seu nome, idade e 
cidade e depois mostre uma mensagem com essas informações. 
Exemplo: "Meu nome é João, tenho 25 anos e moro em São Paulo".

Dica: Use tanto concatenação quanto interpolação.*/


$nome = "Lucas";

$idade = "28";

$cidade = "São Paulo";


echo "Meu nome é $nome, tenho " . $idade . " anos e moro em $cidade."


?>
    
</body>
</html>