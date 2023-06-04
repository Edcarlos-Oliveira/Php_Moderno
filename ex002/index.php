<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
</head>
<body>
    <h1>Exemplo PHP</h1>
        <?php
            date_default_timezone_set("America/Sao_Paulo"); # Coloca a hora atual da região escolhida
            echo "Hoje é dia " .date("d/M/Y ");    # Dia, mês e ano
            echo "e a hora atual é " .date("G:i:s") # Hora minuto e segundo
        ?>
</body>
</html>