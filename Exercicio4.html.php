<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boletín 3 - exercicio 3</title>
</head>
<body>
    <h1>Salario semanal de un trabajador</h1>
    <form action="Exercicio4.html.php" method="post">
        <label for="horas">Horas trabajadras esta semana</label>
        <input type="text" name="horas">
        <input type="submit">
        </input>
    </form> 
<?php

$numero=$_POST['horas'];
$horasn=($numero*12);

if ($_REQUEST['horas']<=40){
    echo "$horasn € ganados esta semana";
}else if ($_REQUEST['horas']>40){
    $sueldo=($_REQUEST['horas']-40)*16 + (40*12);
    echo "$sueldo € ganados esta semana <br>";
    $horas_ex=($_REQUEST['horas']-40) * 16;
    echo "$horas_ex € horas extra";
}
?>
</body>
</html>