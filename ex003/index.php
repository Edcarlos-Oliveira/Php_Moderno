<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Testando Tipos Primitivos Escalares (int ou integer, string, float ou double, boleano ou bool):</h1>
        <?php 
            $num = 300;
            echo "O valor da variável é $num. <br> <br>";  
            var_dump($num);  # Mostra o tipo da variável

            # Forçando o tipo:
            $num2 = (float)"950"; # Nesse caso de string passa a ser float
            echo "<br> <br> O valor é: $num2 <br><br>";
            var_dump($num2);
        ?>
    <h1>Tipos Primitivos Compostos (array, object):</h1>
        <?php
            # Tipo Array:
            $vet = [6, 2, 9, 3, 5]; 
            var_dump($vet);
            print("<br><br>");

            # Tipo Objeto:
            class Pessoa {
                private string $nome;
            }
            $p = new Pessoa;
            var_dump($p)
        ?>
</body>
</html>