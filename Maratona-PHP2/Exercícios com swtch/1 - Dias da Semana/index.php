<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias da semana</title>
</head>
<body>
    <h1>Dias da semana</h1>
    <h2>
<?php
$dia = 3;
switch ($dia){
	case 1:
	echo "Domingo" ;
	break;
	case 2:
	echo "Segunda-Feira";
	break;
	case 3:
	echo "Terça-Feira";
	break;
	case 4:
	echo "Quarta-Feira";
	break;
	case 5:
	echo "Quinta-Feira";
	break;
	case 6:
	echo "Sexta-Feira";
	break;
	case 7:
	echo "Sábado";
}

?>
    </h2>
</body>
</html>