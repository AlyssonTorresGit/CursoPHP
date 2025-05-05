<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    //CAPRANDO  OS DADOS DO FORMULARIO DO RETROALIMENTADO
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="v1">valor 1</label>
        <input type="number" name="v1" id="v1" value="<?php echo $valor1?>">
        <label for="v2">Valor 2</label>
        <input type="number" name="v2" id="v2" value="<?php echo $valor2?>" >
        <input type="submit" value="Somar">
        </form>
    </main>

    
</body>
</html>