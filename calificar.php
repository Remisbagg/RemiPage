<?php
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

if(isset($_POST['Fac'])){
    $Factura = $_POST['Fac']; 
}
if(isset($_POST['Reqc'])){
    $Reqno = $_POST['Reqc']; 
}
if(isset($_POST['Copo'])){
    $Copo = $_POST['Copo']; 
}


if(isset($_POST['Tie'])){
    $Tiempo = $_POST['Tie']; 
}

if(isset($_POST['Ca'])){
    $Calidad = $_POST['Ca']; 
}

if(isset($_POST['Serv'])){
    $Servicio = $_POST['Serv']; 
}


for ($i=0;$i<count(array($Tiempo));$i++)    
{        
$Tiempo = $Tiempo[$i];
} 

for ($i=0;$i<count(array($Calidad));$i++)    
{       
$Calidad = $Calidad[$i];
} 

for ($i=0;$i<count(array($Servicio));$i++)    
{     
$Servicio = $Servicio[$i];  
} 

mysqli_query($conexion,"INSERT INTO calificaciones(Factura_No,Req_No,Cod_provee,T_E,Calidad,Servicio) VALUES ('$Factura','$Reqno','$Copo','$Tiempo','$Calidad','$Servicio')");
header("location:Principal.php");

?>