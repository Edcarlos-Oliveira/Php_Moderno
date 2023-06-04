<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retroalimentável PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
        // Capturando os dados do form abaixo
        $val1 = $_GET['v1'] ?? 0;
        $val2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <!--Definindo o arquivo que receberá os dados '$_SERVER['PHP_SELF']'
        value = $val1 recebe os valores da váriavel '$val1'-->
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>", method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="idv1" value="<?=$val1?>"> 
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="idv2" value="<?=$val2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    
    <section>
        <h2>Resultado dos Valores</h2>
        <?php 
            // Recebendo os valores da soma
            $soma = $val1 + $val2;
            echo "<p>A soma de $val1 + $val2 = <strong>$soma</strong></p>"
        ?>
    </section>
</body>
</html>