<?php
include_once('db.php');
//datos del formulario
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$ci=$_POST['ci'];
$celular=$_POST['celular'];
$ciudad=$_POST['ciudad'];
$direccion=$_POST['direccion'];
$nombre=$_POST['nombre'];
$presupuesto=$_POST['presupuesto'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$tipo=$_POST['tipo'];
$estado=$_POST['estado'];

$conectar=conn();
$sql="INSERT INTO informacion (Nombres, Apellidos, Ci, Celular, Ciudad, Direccion, Nombre, Presupuesto, Marca, Modelo, Tipo, Estado) VALUES ('$nombres','$apellidos','$ci','$celular','$ciudad','$direccion','$nombre','$presupuesto','$marca','$modelo','$tipo','$estado')";
$result = mysqli_query($conectar, $sql);
header("location:cuenta.html");
?>

