<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <h1>Lista de Peças de Carro</h1>
    <?php 
    // Array com nomes das peças de carro
    $pecas_carro = ["Volante", "Para-choque", "Para-brisa", "Rodas", "Bateria", "Radio", "Placa", "Porta", "Motor", "Freio"];
    
    // Cabeçalho
    echo "Peças de carro:" . "<br>" . "<br>";
    
    // Usando foreach para imprimir cada peça
    foreach ($pecas_carro as $peca) {
        echo $peca . "<br>";
    }
    ?>
</body>
</html>
