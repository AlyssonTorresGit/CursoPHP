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
// $n = isset($_GET["num"]) ? $_GET['num'] : 0;
// $o = isset($_GET['oper']) ? $_GET['oper'] : 1;
// switch ($o) {
//     case 1: 
//         $r = $n * 2;
//         break;
//     case 2:
//         $r = $n ** 3;
//         break;
//     case 3:
//         $r = sqrt($n);
// }

// echo "o valor é $r";
$d = isset($_GET['ds']) ? $_GET['ds'] : 0 
switch ($d) {
    case 2:
    case 3: 
    case 4:
    case 5:
    case 6:
        echo "levanta e vai estudar";
        break;
    case 7:
    case 8:
        echo "descanse";
        break;
    default:
        echo "dia da semana invalido";
}



?>
 <a href="index.html">Voltar</a>
</body>
</html>
