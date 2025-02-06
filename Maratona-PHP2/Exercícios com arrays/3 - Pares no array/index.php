<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pares no array</title>
</head>
<body>
    <h2>
        <?php 
 
        $numeros = [1,2,3,4,5,6,7,8,9,0];
        $pares = array();
        foreach ($numeros as $numero){
            if ($numero % 2 == 0){
                $pares [] = $numero;
            }
        }
        print_r($pares);

        ?>
    </h2>
    
</body>
</html>