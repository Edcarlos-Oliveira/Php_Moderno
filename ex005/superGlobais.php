<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre> <!--'<pre>' => Utilizado para deixar a exibição organizada-->
            <?php
                // Iniciando o cookie '3.600' corresponde a 1h 
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                // Iniciando a função 'SESSION'
                $_SESSION["teste"] = "FUNCIONOU!";
                
                // Detalhes da função 'GET' 
                echo "<h1>Superglobal GET:</h1>";
                var_dump($_GET);

                // Detalhes da função 'POST'
                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);

                // Detalhes da função 'REQUEST'
                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);

                // Detalhes da função 'COOKIE'
                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);

                // Detalhes da função 'SESSION'
                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

                // Detalhes funções ambiente (Retorna um array vazio utilizando o servidor xampp)
                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);

                // Detalhes função 'SERVER'
                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);

                // Detalhes função 'GLOBALS'
                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
    
</body>
</html>