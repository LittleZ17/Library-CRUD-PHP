<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="root";
//$pass="root";
    $bd="biblioteca";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>