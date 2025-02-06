<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números - ou + </title>
</head>
<body>
    <?php 
    //Condicional if
    $numero = -015 ;
    if ($numero >= 1){
        echo "O número é positivo.";
        echo "<br>";
        }
   
       else if ($numero < 0){
            echo "O número é negativo. ";
            echo "<br>";
        }
 
            else {
                echo "O número é zero.";
                echo "<br>";
            }
    ?>

    
</body>
</html>