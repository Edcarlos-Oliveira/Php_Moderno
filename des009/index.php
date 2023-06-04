<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        // Coletando os dados
        $v1 = $_GET["v1"] ?? 0;
        $p1 = $_GET["p1"] ?? 1;
        $v2 = $_GET["v2"] ?? 0;
        $p2 = $_GET["p2"] ?? 1;
    ?>

    <main>
        <!--Definindo o formulário-->
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="vl1">1º Valor</label>
            <input type="number" name="v1" id="idv1" step="0.1" required value="<?=$v1?>">
            <label for="ps1">1º Peso</label>
            <input type="number" name="p1" id="idp1" min="1" required value="<?=$p1?>">
            <label for="vl2">2º Valor</label>
            <input type="number" name="v2" id="idv2" step="0.1" required value="<?=$v2?>">
            <label for="ps2">2º Peso</label>
            <input type="number" name="p2" id="idp2" min="1" required value="<?=$p2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    
    <section>
        <h2>Resultado das Médias</h2>
        <?php 
            // Mostrando o Resultado
            $ms = ($v1 + $v2) / 2;                          // Média Simples
            $mp = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);    // Média Ponderada
            
            echo "<p>Analisando os valores $v1 e $v2:</p>";
            echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($ms, 2) . "</li></ul>";
            echo "<ul><li>A <strong>Média Aritmética Ponderada</strong> com pesos $p1 e $p2 é igual a " . number_format($mp, 2) . "</li></ul>";
        ?>
    </section>
</body>
</html>