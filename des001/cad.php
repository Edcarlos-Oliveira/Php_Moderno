<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <main>
    <h1>Resultado Final</h1>
        <?php
            $num = $_REQUEST["num"] ?? 0; // '?? 0' caso nenhum número seja digitado
            $ant = $num - 1;
            $suc = $num + 1;
            
            echo "O número escolhido foi <strong>$num</strong><br><br>";
            echo "O seu antecessor é <strong>$ant</strong><br><br>";
            echo "O seu sucessor é <strong>$suc</strong><br><br>";
        ?>
       <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>