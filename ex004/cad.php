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
    <header>
        <h1>Resultado do Processamento:</h1>
    </header>
    <main>
        <?php 
           $n = $_GET["nome"] ?? "Nome não digitado!";
           $s = $_GET["sobrenome"] ?? "Sobronome não digitado!";
           echo "<p> É um prazer te conhecer! <strong>$n $s</strong>, este é meu site.</p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
    
</body>
</html>