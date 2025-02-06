<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      $numeros = [1, 2, 3];
      $numeros2 = [4, 5, 6];
     
   
      $novo_numero = array_merge($numeros, $numeros2);
   
     
      echo "Array mesclado: ";
      print_r($novo_numero);
    ?>
</body>
</html>