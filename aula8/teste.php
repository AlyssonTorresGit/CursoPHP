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
$nome = isset($_GET['nome']) ? $_GET['nome'] : 'não informado';
$ano = isset($_GET['ano']) ? $_GET['ano'] : '0';
$sexo = $_GET['sexo'];
$idade = intval(date("Y")) - intval($ano);
echo "$nome é $sexo e tem $idade anos.";
?>

<a href="index.html">Voltar</a>
</body>
</html>
