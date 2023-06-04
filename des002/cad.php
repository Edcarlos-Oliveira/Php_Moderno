<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php
            // Poderia ser usado 'rand() ou mt_rand()'             
            $num = random_int(0, 100);
            echo "Gerando um número aleatório entre 0 e 100...<br><br>O valor gerado foi <strong>$num</strong><br><br>"
        ?>
       <button onclick="javascript:location.reload(true)">Gerar Outro</button>
    </main>
    
</body>
</html>

