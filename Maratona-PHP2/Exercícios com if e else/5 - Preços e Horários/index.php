<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $h = 30;

    if ($h >= 10 && $h <= 12){
        echo "Preço do ingresso: R$10,00";
    }
    else if ($h >12 && $h <=17){
        echo "Preço do ingresso: R$20,00";
    }
    
    else if ($h > 17 && $h <=22){
        echo "Preço do ingresso: R$30,00";
    }
    else {
        echo "Não há sessões neste horário.";
    }
    ?>
</body>
</html>