<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "remiserver.mysql.database.azure.com";
$username = "Remisbagg";
$password = "Estudiocolegio1";
$dbname = "remi_base";

// Crear conexión
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexión
if (!$conexion) {
  die("La conexión falló: " . mysqli_connect_error());
}

mysqli_set_charset($conexion,"utf8");

if(isset($_POST['Nom'])){
    $Nombre = $_POST['Nom']; 
}
if(isset($_POST['Cont'])){
    $Contacto = $_POST['Cont']; 
}
if(isset($_POST['Cel'])){
    $Celular = $_POST['Cel']; 
}
if(isset($_POST['Dir'])){
    $Direccion = $_POST['Dir']; 
}
if(isset($_POST['Tel'])){
    $Telefono = $_POST['Tel']; 
}
if(isset($_POST['Mail'])){
    $Email = $_POST['Mail']; 
}
if(isset($_POST['Cri'])){
    $Critico = $_POST['Cri']; 
}
if(isset($_POST['Sum'])){
    $Suministro = $_POST['Sum']; 
}
if(isset($_POST['Act'])){
    $Activo = $_POST['Act']; 
}



for ($i=0;$i<count(array($Critico));$i++)    
{     
$Critico = $Critico[$i];
} 

for ($i=0;$i<count(array($Activo));$i++)    
{     
$Activo = $Activo[$i];
} 


mysqli_query($conexion,"INSERT INTO proveedores(Nombre,Contacto,Celular,Direccion,Telefono,Email,Critico,Suministro_o_servicio,Activo) VALUES ('$Nombre','$Contacto','$Celular','$Direccion','$Telefono','$Email','$Critico','$Suministro','$Activo')");

header("location:Principal.php");
?>