<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>
    
<form action="<?php echo $_REQUEST['PHP']?>" method="post">
        <p>Numero 1<input type="text" name="a"></p>
        <p>Numero 2<input type="text" name="b"></p>
        <p>Numero 3<input type="text" name="c"></p>
        <input type="submit" value="enviar">
</form>
    <?php
       $numeros = array ($_REQUEST["a"],$_REQUEST["b"],$_REQUEST["c"]);
       sort($numeros);
       foreach($numeros)
    ?>
</body>
</html>