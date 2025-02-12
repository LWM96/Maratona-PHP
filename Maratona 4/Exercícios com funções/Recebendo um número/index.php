<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Desconto</title>
</head>
<body>

    <h1>Cálculo de Desconto de 15%</h1>
    
    <!-- Formulário simples -->
    <form method="post">
        <label for="valor_original">Valor Original:</label>
        <input type="number" name="valor_original" required><br><br>
        
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Função para calcular o desconto e o valor com desconto
    function calcular_desconto($valor_original) {
        // Calcula o valor do desconto (15%)
        $desconto = $valor_original * 0.15;
        
        // Calcula o valor com desconto
        $valor_com_desconto = $valor_original - $desconto;
        
        // Retorna o desconto e o valor com desconto como um array
        return array($desconto, $valor_com_desconto);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe o valor original da compra
        $valor_original = $_POST["valor_original"];

        // Chama a função para calcular o desconto e o valor com desconto
        list($desconto, $valor_com_desconto) = calcular_desconto($valor_original);

        // Exibe os resultados
        echo "Valor Original: R$ " . number_format($valor_original, 2, ',', '.') . "<br>";
        echo "Desconto (15%): R$ " . number_format($desconto, 2, ',', '.') . "<br>";
        echo "Valor com Desconto: R$ " . number_format($valor_com_desconto, 2, ',', '.') . "<br>";
    }
    ?>

</body>
</html>
