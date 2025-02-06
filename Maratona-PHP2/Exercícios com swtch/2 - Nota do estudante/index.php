<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota do estudante</title>
</head>
<body>
    <h1>Nota do estudante</h1>
    <h2>
        <?php 
        $nota = 5 ;

        switch ($nota){
            case 
                $nota > 0 && $nota < 5:
                echo "Reprovado";
                break;
            case 
                $nota >= 5 && $nota < 7:
                echo "Recuperação";
                break;
            case 
                $nota >= 7 && $nota <= 10:
                echo "Aprovado";
                break;
            default :
                echo "Nota não existente.";
                
        }
        ?>
    </h2>
    
</body>
</html>