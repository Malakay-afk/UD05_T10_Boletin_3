<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boletín 3 - exercicio 7</title>
</head>
<body>
    <h1>calculadora de media</h1>
    <form action="Exercicio8.html.php" method="post">
        <label for="nota1">introduce la 1º nota</label>
        <input type="text" name="nota1"></br>
        <label for="nota2">introduce la 2º nota</label>
        <input type="text" name="nota2"></br>
        <label for="nota3">introduce la 3º nota</label>
        <input type="text" name="nota3"></br></br>
        <input type="submit"></br>
        </br>
        </input>
    </form> 
<?php
    $nota1=($_POST['nota1']);
    $nota2=($_POST['nota2']);
    $nota3=($_POST['nota3']);
    $notamedia=($nota1+$nota2+$nota3)/3;
    echo "la nota media es $notamedia"."<br>"; 

        if($notamedia>=0 && $notamedia<5){
            echo 'es usted un fracasado y esta suspenso';
        }elseif($notamedia>5 && $notamedia<6){
            echo 'ha sacado un 5 raspao';
        }elseif($notamedia>6 && $notamedia<7){
            echo 'ha sacado un bien';
        }elseif($notamedia>7 && $notamedia<9){
            echo 'ha sacado un notable';
        }elseif($notamedia>9 && $notamedia<=10){
            echo 'ha sacado un puto sobresaliente';
        }else{
            echo 'si sale esto la existencia de la humanidad peligra';
        }
?>
</body>
</html>