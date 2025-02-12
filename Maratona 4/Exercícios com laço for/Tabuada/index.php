<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h1>Tabuada do 8</h1>
    <?php 
    $a = 8;
    for ($i = 0; $i <= 10; $i++) { 
        echo "$a x $i = " . $a * $i;
        echo "<br>";           
    }
    ?>
</body>
</html>
