<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        // Capturando os dados
        $valor = $_GET["pre"] ?? 0;
        $porcento = $_GET["percentual"] ?? 0;
    ?>

    <main>
        <!--Definindo o formulário-->
        <h1>Reajustador de Preço</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preço">Preço do Produto(R$)</label>
            <input type="number" name="pre" id="idpre" min="0.10" step="0.01" value="<?=$valor?>">
            <label for="percentual">Qual o percentual de reajuste?(<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="percentual" id="percentual" min="0" max="100" oninput="mudaValor()" value="<?=$porcento?>"> 
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado Reajustes</h2>
        <?php 
            // Mostrando o Resultado
            $valorNovo = $valor + ($valor * $porcento/100);

            echo "O produto que custava R$" . number_format($valor, 2, ",", ".") . " com<strong> $porcento% de aumento</strong> vai passar a custar <strong>R$" . number_format($valorNovo, 2, ",", ".") . "</strong> a partir de agora.";
        ?>
    </section>

    <script>
        // Declaração automáticas quando atualiza a página
        mudaValor()
        // Declarando o evento
        function mudaValor() {
            p.innerText = percentual.value;
        }
    </script>

</body>
</html>