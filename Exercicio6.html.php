<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boletín 3 - exercicio 3</title>
</head>
<body>
    <h1>calculadora de tiempo</h1>
    <form action="Exercicio6.html.php" method="post">
        <label for="altura">introduce la altura a la cual desea tirar el objeto.</label>
        <input type="text" name="altura">
        <input type="submit">
        </input>
    </form> 
<?php

$numero=$_POST['altura'];
$formula_s=sqrt(2*$numero)/(9.81);
echo "$formula_s segundos en caer dende $numero metros";

?>
</body>
</html>