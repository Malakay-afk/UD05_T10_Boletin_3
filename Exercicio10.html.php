<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boletín 3 - exercicio 10</title>
</head>
<body>
    <h1>Horoscopo</h1>
    

    <form action="<?php echo $_REQUEST['PHP']?>" method="post">
        <label for="dia">Día</label>
        <input type="number" min="1" max="31" name="dia"><br><br>
        <select name="mes">
            <option value="01">Xaneiro</option>
            <option value="02">Febreiro</option>
            <option value="03">Marzo</option>
            <option value="04">Abril</option>
            <option value="05">Maio</option>
            <option value="06">Xuño</option>
            <option value="07">Xullo</option>
            <option value="08">Agosto</option>
            <option value="09">Septembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Decembro</option>
        </select><br>
        <br>
        <input type="submit"><br><br>
    </form> 
    <?php
        if(!isset($_REQUEST['dia']) || !isset($_REQUEST['mes'])){
            echo "<p>Tes que escoller o día e o mes.</p>";
        }else{
            $mes = $_REQUEST['mes'];
            $día = $_REQUEST['dia'];
            $horoscopo = "";
            switch ($mes) {
                case '01':
                    if($dia<20){
                        $horoscopo = "capricornio";
                    }else{
                        $horoscopo = "acuario";
                    }
                    break;
                case '02':
                    if($dia<19){
                        $horoscopo = "Acuario";
                    }else{
                        $horoscopo = "Piscis";
                    }
                    break;
                case '03':
                    if($dia<20){
                        $horoscopo = "Piscis";
                    }else{
                        $horoscopo = "Aries";
                    }
                    break;
                case '04':
                    if($dia<20){
                        $horoscopo = "Aries";
                    }else{
                        $horoscopo = "Tauro";
                    }
                    break;
                case '05':
                    if($dia<22){
                        $horoscopo = "Tauro";
                    }else{
                        $horoscopo = "Géminis";
                    }
                    break;
                case '06':
                    if($dia<22){
                        $horoscopo = "Géminis";
                    }else{
                        $horoscopo = "Cáncer";
                    }
                    break;
                case '07':
                    if($dia<23){
                        $horoscopo = "Cáncer";
                    }else{
                        $horoscopo = "Leo";
                    }
                    break;
                case '08':
                    if($dia<23){
                        $horoscopo = "Leo";
                    }else{
                        $horoscopo = "Virgo";
                    }
                    break;
                case '09':
                    if($dia<23){
                        $horoscopo = "Virgo";
                    }else{
                        $horoscopo = "Libra";
                    }
                    break;
                case '10':
                    if($dia<23){
                        $horoscopo = "Libra";
                    }else{
                        $horoscopo = "Escorpio";
                    }
                    break;
                case '11':
                    if($dia<21){
                        $horoscopo = "Escorpio";
                    }else{
                        $horoscopo = "Sagitario";
                    }
                    break;
                case '12':
                    if($dia<24){
                        $horoscopo = "Sagitario";
                    }else{
                        $horoscopo = "capricornio";
                    }
                    break;
            }
            echo "O teu horoscopo según varias fortes consultadas de gran calidade de iformación,
            máis ou menos é $horoscopo";
        }
    ?>
</body>
</html>