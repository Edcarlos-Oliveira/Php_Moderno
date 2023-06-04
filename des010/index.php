<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
        // Capturando os dados
        $anoD = $_GET["anoD"] ?? 2000;
        $anoA = $_GET["anoA"] ?? date("Y");
        $anoA2 = date("Y"); 
    ?>

    <main>
        <!--Definindo o formulário-->
        <h1>Calculando a sua Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano">Em que ano você nasceu?</label>
            <input type="number" name="anoD" id="idanoD" max="<?=($anoA2 - 1)?>" value="<?=$anoD?>">
            <label for="ano2">Quer saber sua idade em qual ano?(Atualmente estamos em <strong><?=$anoA2?></strong>)</label>
            <input type="number" name="anoA" id="idanoA" value="<?=$anoA?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    
    <section>
        <h2>Resultado</h2>
        <?php 
            // Mostrando o Resultado
            $idade = $anoA - $anoD;
            echo "Quem nasceu em $anoD vai ter <strong>$idade ano(s)</strong> em $anoA!";
        ?>
    </section>
</body>
</html>