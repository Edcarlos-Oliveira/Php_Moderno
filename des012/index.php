<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        // Capturando os dados 
        $valor = $_GET["num"] ?? 0;
    ?>

    <main>
        <!--Definindo o formulário-->
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="numero">Qual é o total de segundos?</label>
            <input type="number" name="num" id="idnum" min="1" required value="<?=$valor?>">
            <input type="submit" value="Calcular">
        </form>
    </main> 
    
    <section>
        <h2>Totalizando Tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($valor, 2, ",", ".")?></strong> segundos equivalem a um total de:</p>
        <?php 
            // Mostrando o Resultado
            $sobra = $valor;

            // Calculando a semana
            $semana = (int)($sobra / 604_800);
            $sobra = $sobra % 604_800;

            // Calculando o dia
            $dia = (int)($sobra / 86_400);
            $sobra = $sobra % 86_400;

            // Calculando a hora
            $hora = (int)($sobra / 3_600);
            $sobra = $sobra % 3_600;

            // Calculando o minuto
            $minuto = (int)($sobra / 60);
            $sobra = $sobra % 60;

            // Calculando o segundo
            $segundo = $sobra;

            echo "<ul>
                <li><strong>$semana</strong> Semanas</li>
                <li><strong>$dia</strong> Dias</li>
                <li><strong>$hora</strong> Hora</li>
                <li><strong>$minuto</strong> Minutos</li>
                <li><strong>$segundo</strong> Segundos</li>
            </ul>"
        ?>
    </section>
</body>
</html>