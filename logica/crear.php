<?php

include("conexion.php");
$con=conectar();

$isbn=$_POST['isbn'];
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$descripcion=$_POST['descripcion'];
$portada=$_POST['portada'];

$sql= "INSERT INTO `libros` (`id`, `ISBN`, `titulo`, `autor`, `descripcion`, `portada`) 
VALUES (NULL, '$isbn', '$titulo', '$autor', '$descripcion', '$portada')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../indice.php");
} else {

}
?>