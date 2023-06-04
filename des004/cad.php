<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Conversor v2.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Moedas v2.0</h1>
        <?php
            // Definindo as datas automáticas, cotação da data do dia
            $dIni = date("m-d-Y", strtotime("-7 days"));
            $dFim = date("m-d-Y");

            // url da Api(Banco Central) e moeda base($mb) real, necessário incluir os '\' antes das datas
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$dIni.'\'&@dataFinalCotacao=\''.$dFim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            // Tratando os dados
            $dados = json_decode(file_get_contents($url), true);
            $cot = $dados["value"][0]["cotacaoCompra"];

            // Recebendo os dados digitados pelo usuário
            $val = $_REQUEST["valor"] ?? 0;

            // Transformando em dolar
            $vDol = $val / $cot;
            
            // Criando o padrão de formatação
            $pad = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            // Mostrando os dados
            echo "Seus " . numfmt_format_currency($pad, $val, "BRL") . " equivalem a <strong>" . numfmt_format_currency($pad, $vDol, "USD") . "</strong></p>";
        ?>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </main>
</body>
</html>