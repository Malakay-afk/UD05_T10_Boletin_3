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
            $esCapicua = true;
            for($i=0; $i<strlen($meuNumero); $i++){
                $esquerda=substr($meuNumero,$i,1);
                $dereita=substr($meuNumero,strlen($meuNumero)-1-$i,1);
                if($esquerda!=$dereita) {
                    $esCapicua = false;
                }
            }
            if($esCapicua){
                echo "<p>O número $meuNumero é capicúa</p>";
                    }else{
                echo "<p>No es capicúa</p>";
        }
    }
    ?>
</body>
</html>