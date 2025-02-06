<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        <?php 
        $array = ["Lucas", "Willian", "Samuel", "Edna", "Gabriel"];

        echo "Nomes: ";
        print_r($array);

        unset($array[2]);
        echo "2º Elemento removido";
        print_r($array);
        ?>
    </h2>
    
</body>
</html>