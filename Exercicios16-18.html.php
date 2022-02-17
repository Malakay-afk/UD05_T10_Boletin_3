<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios 16-18</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="numero">Introduce un número:</label>
        <input type="number" name="numero">
        <br>
        <input type="submit" value="Enviar">
</form>

    <?php
        if(!isset($_POST['numero'])){
            echo "<p>Tes que introducir un número.</p>";
        }else if(filter_var($_POST['numero'],FILTER_VALIDATE_INT)) {
            $meuNumero = $_POST['numero'];
            $meuNumero = abs($meuNumero);


            $primeiroDixito= substr($meuNumero,0,1);
            echo "<p>O primeiro díxito do número é : $primeiroDixito</p>";
            $ultimoDixito = substr($meuNumero,strlen($meuNumero)-1,1);
            echo "<p>O último dixito do número é: $ultimoDixito </p>";
            $numeroDixitos = strlen($meuNumero);
            echo "<p>A cantidade de díxitos é: $numeroDixitos</p>";
        }else{
        }
    ?>
</body>
</html>