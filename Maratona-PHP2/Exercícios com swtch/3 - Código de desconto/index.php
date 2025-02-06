<!DOCTYPE html>
<html lang="pt-b">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Código de desconto</h1>
    <h2>
    <?php

$codigo = 2;

switch ($codigo){
	case 1:
		echo "Desconto de 10%";
		break;
	case 2:
		echo "Desconto de 20%";
		break;
	case 3:
		echo "Desconto de 30%";
		break;
	default :
		echo "Não há desconto disponível";;
		
}
?>
    </h2>
</body>
</html>