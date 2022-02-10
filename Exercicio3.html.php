<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boletín 3 - exercicio 3</title>
</head>
<body>
    <form action="Exercicio3.html.php" method="post">
        <label for="numero">Escribe un número del 1 al 7</label>
        <input type="text" name="numero">
        </input>
    </form> 
<?php

$numero=$_GET['numero'];

if ($_REQUEST['numero']==1){
    echo "Es lunes";
}else if($_REQUEST['numero']==2){
    echo "Es martes";
}else if($_REQUEST['numero']==3){
    echo "Es miercoles";
}else if($_REQUEST['numero']==4){
    echo "Es jueves";
}else if($_REQUEST['numero']==5){
    echo "Es viernes";
}else if($_REQUEST['numero']==6){
    echo "Es sabado";
}else if($_REQUEST['numero']==7){
    echo "Es domingo";
}

?>
</body>
</html>