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



if(isset($_POST['Fs'])){
    $Fecha = $_POST['Fs']; 
}
if(isset($_POST['Cant'])){
    $Cantid = $_POST['Cant']; 
}
if(isset($_POST['Um'])){
    $Umd = $_POST['Um']; 
}
if(isset($_POST['Desc'])){
    $Descripcion = $_POST['Desc']; 
}
if(isset($_POST['VU'])){
    $VU = $_POST['VU']; 
}
if(isset($_POST['Rf'])){
    $Ref = $_POST['Rf']; 
}
if(isset($_POST['Op'])){
    $OdeP = $_POST['Op']; 
}
if(isset($_POST['Cod'])){
    $CodP = $_POST['Cod']; 
}
if(isset($_POST['Vend'])){
    $Vendedor = $_POST['Vend']; 
}

if(isset($_POST['Sol'])){
    $Solicitado = $_POST['Sol']; 
}
if(isset($_POST['Ver'])){
    $Verificado = $_POST['Ver']; 
}
if(isset($_POST['Req'])){
    $Req = $_POST['Req']; 
}


mysqli_query($conexion,"INSERT INTO materiales(Fecha_de_solicitud,Cantidad,Unidad_de_medida,Descripcion,Ref,Valor_unit,OdeP,Codigo_de_proveedor,Vendedor,Solicitado_por,Verificado_por,Req) VALUES ('$Fecha','$Cantid','$Umd','$Descripcion','$Ref','$VU','$OdeP','$CodP','$Vendedor','$Solicitado','$Verificado','$Req')");

header("location:Principal.php");
?>