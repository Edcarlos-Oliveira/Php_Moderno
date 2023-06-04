<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        // Capturando os dados 
        $saque = $_GET["vl"] ?? 0;
    ?>

    <main>
        <!--Definindo o formulário-->
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor deseja sacar? (R$)*</label>
            <input type="number" name="vl" id="idvl" min="5" step="5" value="<?=$saque?>">
            <p>*Notas disponíveis R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",", '.')?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        
        <?php

        // Lógica para separação das cédulas
        $tot = $saque;
        $cedA = 100;
        $totCed = 0;
        $result = array();
                
        while(true) {   
            
            if ($tot >= $cedA) {
                $tot -= $cedA;
                $totCed += 1;
            }
            else {                            
                $result[] = $totCed;

                if ($cedA == 100) {
                    $cedA = 50;
                }
                elseif ($cedA == 50) {
                    $cedA = 10;
                }
                elseif ($cedA == 10) {
                    $cedA = 5;
                }
                $totCed = 0;  
                if ($tot == 0) {
                    break;
                }    
            }    
        }

        // Definido a exibição da contagem
        if (count($result) == 1) {
            array_push($result, 0,0,0);
        }
        elseif (count($result) == 2) {
            array_push($result, 0,0);
        }
        else {
            if (count($result) == 3) {
                array_push($result, 0);
            }
        }
    ?>  
        <!--Lista das imagens das cédulas-->
        <ul>
            <li><img src="./100-reais.jpg" alt="cem"> X <?=$result[0]?></li>
            <li><img src="./50-reais.jpg" alt="cem"> X <?=$result[1]?></li>
            <li><img src="./10-reais.jpg" alt="cem"> X <?=$result[2]?></li>
            <li><img src="./5-reais.jpg" alt="cem"> X <?=$result[3]?></li>
        </ul>
    </section>
</body>
</html>

