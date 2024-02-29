<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //Capturando os dados dos formularios retroalimentado
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <form action="<?PHP echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2?>">
            <input type="submit" value="Somar">
    </main>   


    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            echo "<p> O resultado da soma entre os dois valores é : " . $soma . "</p>";
        
        ?>


    </section>
</body>
</html>