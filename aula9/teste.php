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
$ano = isset($_GET['ano']) ? $_GET['ano'] : 1900; 
$i = date('Y') - $ano;

if ($i < 16) {
    $tipoVoto = 'não vota';
}
elseif (($i >= 16 && $i <18) || ($i > 65)) {
    $tipoVoto = 'opcional';
}
else {
    $tipoVoto = 'obrigatorio';
}
   
echo "$nome, vc tem $i anos e o tipo voto, $tipoVoto";

?>

<a href="index.html">Voltar</a>
</body>
</html>
