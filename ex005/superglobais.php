<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=main, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <pre>
            <?php 
            setcookie("sia-da-semana", "SEMANA", time() + 3600);
            session_start();
$_SESSION["teste", "funcionou"];

            echo "<h1>superglobla GEt</h1>"; 
                var_dump($_GET);
                echo "<h1>superglobla POST</h1>";
                var_dump("$_POST");
                echo "<h1>superglobla REQUEST</h1>";
                var_dump("$_REQUEST");
                echo "<h1>superglobla COOKIE</h1>";
                var_dump("$_COOKIE");
                echo "<h1>superglobal session </h1>";
                var_dump("$_SESSION");
                var_dump("$_SERVER");



            ?>  

        </pre>
    </main>
    
</body>
</html>