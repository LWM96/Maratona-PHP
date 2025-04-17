<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peça de Carro</title>
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
        <h2>Peças de Carro</h2>
        <p>Escolha as peças que deseja comprar para o seu carro.</p>
        <p>Selecione as opções abaixo e clique em "Comprar" para finalizar sua compra.</p>
        <p>Você pode adicionar outras peças que não estão listadas.</p>

<h3>Escolha as peças que deseja comprar:</h3>
<form action="" method="POST">
 
<div>
        <div class="radio">
            <input type="checkbox" value="Capô" name="pecasdecarro[]"/>
            <label for="capo">Capô</label>
        </div>
        <div class="radio">
            <input type="checkbox" value="Porta esquerda" name="pecasdecarro[]"/>
            <label for="portaesquerda">Porta Esquerda</label>
        </div>
        <div class="radio">
        <input type="checkbox" value="Porta direita" name="pecasdecarro[]"/>
            <label for="portadireita">Porta direita</label>
        </div>
        <div class="radio">
            <input type="checkbox" value="Pneu" name="pecasdecarro[]"/>
            <label for="pneu">Pneu</label>
        </div>
        <div class="radio">
            <input type="checkbox" value="Roda" name="pecasdecarro[]"/>
            <label for="roda">Roda</label>
        </div>
        <div class="radio">
            <input type="checkbox" value="Calota" name="pecasdecarro[]"/>
             <label for="calota">Calota</label>
        </div>
        <div class="radio">
            <input type="checkbox" value="Porta mala" name="pecasdecarro[]"/>
            <label for="portamala">Porta Mala</label>                    
        </div>
        <div class="radio">
            <input type="checkbox" value="Parabrisa" name="pecasdecarro[]"/>
            <label for="parabrisa">Parabrisa </label>                    
        </div>
        </div>                   
<br>
<div>
    <label for="outraspecas">Outras peças:</label><br>    
    <textarea name="outraspecas"></textarea>
</div>
<input type="submit" value="Comprar"/>
</form>
</div>
 
<div class="resultado">
<?php 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    if (isset($_POST['pecasdecarro'])) {
        $pecas_carro = $_POST['pecasdecarro'];
 
        echo "<h3>Peças selecionadas:</h3>";
        echo "<ul>";
        foreach ($pecas_carro as $peca) {
            echo "<li>" . htmlspecialchars($peca) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhuma peça foi selecionada.</p>";
    }
 
    if (!empty($_POST['outraspecas'])) {
        echo "<h4>Outras peças informadas:</h4>";
        echo "<p>" . nl2br(htmlspecialchars($_POST['outraspecas'])) . "</p>";
    }
}
?>
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