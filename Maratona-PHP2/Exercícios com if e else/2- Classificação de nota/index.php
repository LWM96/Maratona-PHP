<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>

    
    <?php 
    $nota = 5;
   
    if ($nota >=5 && $nota <=6.9) {
        echo "Recuperação";
    }
   
    else if ($nota >=7 && $nota <=8.9) {
        echo "Aprovado";
    }  
 
    else if ($nota >=9 && $nota <=10) {
        echo "Aprovado com distinção";
    }  
 
    else {
        echo "Reprovado";
    }
 
    echo "<br>";
    ?>
    
</body>
</html>