<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boletín 3 - exercicio 11</title>
</head>
<body>   
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <p>Escribe la hora: <input type="text" name="n"></p>
        <p>Escribe minuto: <input type="text" name="m"></p>
        <input type="submit" value="enviar">

</form>

    <?php
          $numero = ($_REQUEST['n'] * 60 * 60) + ($_REQUEST['m'] * 60);
    
          $resultado = 86400 - $numero;
        
    echo "quedan $resultado segundos para llegar a medianoche";

    ?>

</body>
</html>