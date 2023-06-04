<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador Sálario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Recebendo os dados
        $salario = $_GET["sal"] ?? 0;
        $minimo = 1_320;
    ?>

    <main>
        <!--Definindo o formulário-->
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário(R$)</label>
            <input type="number" name="sal" id="idsal" step="0.01" value="<?=$salario?>">
            <p>Considerando o Salário mínimo de <strong>R$<?=number_format($minimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            // Mostrando o Resultado
            $ganha = intdiv($salario, $minimo);            
            $sobra = $salario % $minimo;
            
            echo "Quem recebe um salário de R$" . number_format($salario, 2, ",", ".") . " ganha <strong>" . $ganha . " salário(os) mínimo(os) + </strong>R$ " . number_format($sobra, 2, ",", "."); 
        ?>
    </section>
</body>
</html>