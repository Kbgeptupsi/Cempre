<?php
include('conexionv.php');

$NIT=$_POST['txtNIT'];
mysqli_query($mysqli,"DELETE FROM empresa where NIT='$NIT'") or die("Error al eliminar");

mysqli_close($mysqli);
header("location:mostrarEmpresas.php");

?>