<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora de Multiplicação</title>
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
        <h2>Multiplicação de dois números</h2>
        <p>Preencha os números abaixo e clique em "Multiplicar" para ver o resultado.</p>
        
        <form method="post" action="">
            <label for="numero1">Digite o primeiro número:</label>
            <input type="number" name="numero1" value="
        <?php echo isset($_POST['numero1']) ? $_POST['numero1'] : ''; ?>
        " required>
            <br>
            <label for="numero2">Digite o segundo número:</label>
            <input type="number" name="numero2" value="<?php echo isset($_POST['numero2']) ? $_POST['numero2'] : ''; ?>" required>
            <br>
            <input type="submit" name="calcular" value="Multiplicar">
            <input type="submit" name="limpar" value="Limpar">
        </form>

        <div class="resultado">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['calcular'])) {
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                $resultado = $numero1 * $numero2;

                echo "<div class='resultado'>";
                echo "Resultado: $numero1 × $numero2 = <strong>$resultado</strong>";
                echo "</div>";
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