<?php
include ("conection.php");
$valor1 = $_POST["valor23"];

$insertar = "INSERT INTO Datos (valor) VALUES ('$valor1')";

$resultado = mysqli_query($conexion, $insertar);

if($resultado){
    echo "<script>alert('Se ha registrado el usuario con exito); 
    </script>";
} else {
    echo "<script>alert('No se puedo registrar); 
    window.history.go(-1);</script>";
}