<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>Calculo de Raiz quadrada</title>
</head>
<body>
    <header>
        <h1> Exercícios de Formulários</h1>
        <nav>
            <a href="index.php">Início</a>
            <a href="ex1.php">Média de Nota</a>
            <a href="ex2.php">Cálculo de Multiplicação</a>
            <a href="ex3.php">Cálculo da Raiz Quadrada</a>
            <a href="ex4.php">Peças de Carro</a>
            <a href="ex5.php">Petshop</a>
        </nav>
    </header>

<div class="container">
    <h2>Calculo de Raiz quadrada</h2>
    <form method="POST" action="">
        <p>Digite um número e clique em "Enviar" para calcular a raiz quadrada.</p>
    <div>
        <label for="i">Digite um número:</label>
        <input type="text" name="i" placeholder="Digite um número"/>
    </div>
    <input type="submit" value="Enviar" />
</form>

<div class="resultado">
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    if (!empty($_POST["i"])) {
        $numero = $_POST["i"];
        
        
        if (is_numeric($numero)) {
            $raiz = sqrt($numero);
            echo "<br><br>O número digitado foi: $numero<br>";
            echo "A raiz quadrada de $numero é: " . number_format($raiz, 0) . "<br><br>";
        } else {
            echo "Por favor, insira um número válido.<br><br>";
        }
    } else {
        echo "O campo não pode estar vazio. Digite um número.<br><br>";
    }
}
?>
</div>
</div>
<footer class="footerc">
        <p>Desenvolvido pelos melhores alunos da sala</p>
        <img src="img/alan.png" alt="Alan" width="100" height="100">
        <img src="img/lucasl.png" alt="Lucas Lins" width="100" height="100">
        <img src="img/lucasw.png" alt="Lucas Washington" width="100" height="100">
        <p>&copy; 2025 - Todos os direitos reservados.</p>
    </footer>
</body>
</html>