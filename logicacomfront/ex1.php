<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Nota Final</title>
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
        <h2>Calculadora de Média Final</h2>
        <p>Descubra se você foi aprovado ou reprovado com base nas suas notas!</p>
        <p>Preencha as notas de cada bimestre e clique em "Enviar" para ver o resultado.</p>
    <h2>Descubra se você foi aprovado</h2>
    <h3>Digite suas notas de cada bimestre:</h3>
    <form method="POST">
        <label for="nota1">1º Bimestre:</label>
        <input type="number" id="nota1" name="nota1" min="0" max="10" step="0.1" required>
        <br>
        <label for="nota2">2º Bimestre:</label>
        <input type="number" id="nota2" name="nota2" min="0" max="10" step="0.1" required>
        <br>
        <label for="nota3">3º Bimestre:</label>
        <input type="number" id="nota3" name="nota3" min="0" max="10" step="0.1" required>
        <br>
        <label for="nota4">4º Bimestre:</label>
        <input type="number" id="nota4" name="nota4" min="0" max="10" step="0.1" required>
        <br>
        <input type="submit" value="Enviar" id="enviar">
        <br>
    </form>

    <div class="resultado">
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = floatval($_POST['nota1']);
        $nota2 = floatval($_POST['nota2']);
        $nota3 = floatval($_POST['nota3']);
        $nota4 = floatval($_POST['nota4']);
        
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        
        switch (true) {
            case ($media >= 0 && $media <= 4.9):
                $resultado = "Reprovado. Pelo amor, estude mais!";
                break;
            case ($media >= 5 && $media <= 6.9):
                $resultado = "Recuperação! Estude um pouco mais!";
                break;
            case ($media >= 7 && $media <= 10):
                $resultado = "Aprovado. Parabéns! Você é um gênio!";
                break;
            default:
                $resultado = "Nota inválida. Digite notas entre 0 e 10.";
                break;
        }
        
        echo "<p>A média das notas é: $media</p>";
        echo "<p> $resultado</p>";
    }
    ?>
    </div>
    </div>
    <footer id="footergeral">
        <p>Desenvolvido pelos melhores alunos da sala</p>
        <img src="img/alan.png" alt="Alan" width="100" height="100">
        <img src="img/lucasl.png" alt="Lucas Lins" width="100" height="100">
        <img src="img/lucasw.png" alt="Lucas Washington" width="100" height="100">
        <p>&copy; 2025 - Todos os direitos reservados.</p>
    </footer>
</body>
</html>