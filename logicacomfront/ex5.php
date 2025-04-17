<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
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
        <h2>Petshop</h2>
        <h3>Coloque os dados do seu animal</h3>
        <p>Vamos conhecer o seu pet melhor! Por favor, preencha os dados abaixo sobre o seu animal de estimação. Queremos saber tudo sobre o seu amigo de quatro patas!</p>
        
        <form action="" method="POST">
            <div>
                <label>Nome:</label><br>    
                <input type="text" name="nome" required/>
            </div>
            <div>
                <label>Idade:</label><br>    
                <input type="number" name="idade" required/>
            </div>
            <div>
                <label for="raca">Raça:</label><br>    
                <input type="text" name="raca" required/>
            </div>
            <div>
                <label>Peso:</label><br>    
                <input type="text" name="peso" placeholder="1,75" required/>
            </div>
            <br>
            <div>
                <label for="cor">Descreva a cor do seu animal:</label>   
                <textarea name="cor" required></textarea>
            </div>
            <br>
            <input type="submit" value="Enviar"/>
        </form>

        <div class="resultado">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST['nome']);
            $idade = htmlspecialchars($_POST['idade']);
            $raca = htmlspecialchars($_POST['raca']);
            $peso = htmlspecialchars($_POST['peso']);
            $cor = htmlspecialchars($_POST['cor']);

            echo "<h3>Dados do seu animal:</h3>";
            echo "Nome: $nome<br>";
            echo "Idade: $idade<br>";
            echo "Raça: $raca<br>";
            echo "Peso: $peso<br>";
            echo "Cor: $cor<br>";
        }
        ?>
    </div>
    </div>
    <footer>
        <p>Desenvolvido pelos melhores alunos da sala</p>
        <img src="img/alan.png" alt="Alan" width="100" height="100">
        <img src="img/lucasl.png" alt="Lucas Lins" width="100" height="100">
        <img src="img/lucasw.png" alt="Lucas Washington" width="100" height="100">
        <p>&copy; 2025 - Todos os direitos reservados.</p>
    </footer>
</body>
</html>