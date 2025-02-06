<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$idade = 10;
 
if ($idade >= 16 && $idade <= 17) {
    echo "Pode votar, mas não é obrigatório";
}

else if ($idade >= 18) {
    echo "Obrigatório votar";
}

else {
    echo "Não pode votar";
}
    ?>
    
</body>
</html>