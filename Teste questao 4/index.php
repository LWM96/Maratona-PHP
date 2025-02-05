<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saldação com Nome</title>
</head>

<body>


<h2>Saudação com Nome</h2>

    <form action = "index.php" method="get"> <!--Foi criado um form, que é essencialmente uma forma de trocar infomações entre html e PHP-->

    Nome: <input type="text" name="nome">  <!-- O input é referente a uma caixa que pode ser preenchida no client side para atribuir um valor que posteriormente pode ser usado em uma função dentro do PHP-->

    Idade: <input type="number" name="idade"> 

    Cidade: <input type="nnome" name="cidade"> 

    <input type="submit"> <!--Input de tipo submit é referente a um botão que ao ser pressioando envia o input do client para o servidor-->

    </form>

    <br>

<?php 

/* Objetivo: Declarar variáveis, usar concatenação e interpolação.

Descrição: Crie um script que declare uma variável para o nome de 
uma pessoa e exiba uma saudação personalizada, por exemplo: "Olá, 
João! Bem-vindo ao nosso site!".

Dica: Utilize tanto a concatenação (.) quanto a interpolação dentro de 
uma string com aspas duplas.

Meu nome é João, tenho 25 anos e moro em São Paulo*/


$var = "Bem-vindo";

echo "Meu nome é " . $_GET["nome"] . ", tenho " . $_GET["idade"] . " anos e moro em " . $_GET["cidade"] . "!";


?>

</body>
</html>