<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Conversor v1.0</h1>
        <?php 
            $val = $_REQUEST["valor"] ?? 0; // '?? 0' caso nenhum valor seja digitado
            $cot = 5.05;
            $tot = $val / $cot;

            // Formatação padrão internacionalizado
            // Precisa ativar a 'extensão intl' no arquivo do 'php.ini'
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $val, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $tot, "USD")."</strong></p>"; 
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>