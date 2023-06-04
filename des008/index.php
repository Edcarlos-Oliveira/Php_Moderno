<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        // Capturando os dados
        $num = $_GET["num"] ?? 1;
    ?>

    <main>
        <!--Definindo o formulário-->
        <h1>Informe um Número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="num" id="idnum" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    
    <section>
        <h2>Resultado Análise</h2>
        <?php
            // Mostrando o Resultado
            $rq = sqrt($num);
            $rc = pow($num, 1/3); 
            echo "<p>Analisando o <strong>número $num</strong>, temos:</p>";
            echo "<ul><li>A sua raiz quadrada é <strong>" . number_format($rq, 3) . "</strong></ul></li>";
            echo "<ul><li>A sua raiz cúbica é <strong>" . number_format($rc, 3) . "</strong></ul></li>";
        ?>
    </section>
</body>
</html>