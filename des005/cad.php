<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Analisador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado da Análise</h1>
        <?php 
            $num = $_REQUEST["num"] ?? 0;
            $pInt = (int) $num;        // Pega a parte inteira
            $pFra = $num - $pInt;      // Pega a parte fracionária 

            // Mostrando os resultados
            echo "Analisando o número <strong>". number_format($num, 3, ",", ".") . "</strong> infrmado pelo usuário:<br><br><ul><li>A parte inteira do número é <strong>". number_format($pInt, 0, ",", ".") ."</strong></li>";
            
            echo "<li>A parte fracionária do número é <strong>" . number_format($pFra, 3, ",", ".") . "</strong></li></ul>"
        ?>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </main>
</body>
</html>