<?php   
header('Content-Type: text/html; charset=UTF-8');
$hora=$_GET['hora'];

if ($_REQUEST['hora']>=6 && $_REQUEST['hora']<=12){
    echo "buenos días";
}else if($_REQUEST['hora']>=13 && $_REQUEST['hora']<=20){
    echo "buenas tardes";
}else if($_REQUEST['hora']>=21 || $_REQUEST['hora']<=5){
    echo "buenas noches";
}
?>