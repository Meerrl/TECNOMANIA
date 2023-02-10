<?php
function conn(){
    $hostname="localhost:3308";
    $usuariodb="root";
    $password="";
    $dbname="registrop";
    $conectar = mysqli_connect($hostname, $usuariodb, $password, $dbname);
    return $conectar;
}
?>
