<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        // Caputurando os dados 
        $div = $_GET["num1"] ?? 0;
        $dvs = $_GET["num2"] ?? 1;
    ?>

    <main>
        <!--Criação do formulário-->
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="divid">Dividendo</label>
            <input type="number" name="num1" id="idnum1" min="0" value="<?=$div?>">
            <label for="div">Divisor</label>
            <input type="number" name="num2" id="idnum2" min="1" value="<?=$dvs?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php
            // Mostrando o resultado 
            $res = intdiv($div, $dvs);
            $res2 = $div % $dvs;
        ?>

        <table class="divisao">
            <tr>
                <td><strong><?=$div?></strong></td>
                <td><strong><?=$dvs?></strong></td>
            </tr>
            <tr>
                <td><strong><?=$res2?></strong></td>
                <td><strong><?=$res?></strong></td>
            </tr>
        </table>
    </section>
</body>
</html>