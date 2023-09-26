<?php
$servername = "remicom-server.mysql.database.azure.com";
$username = "sjtwfqxgtc";
$password = "Estudiocolegio12";
$dbname = "remicom-database";

// Crear conexión
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexión
if (!$conexion) {
  die("La conexión falló: " . mysqli_connect_error());
}

mysqli_set_charset($conexion,"utf8");



if(isset($_POST['CP'])){
    $CP = $_POST['CP']; 
}
if(isset($_POST['CR'])){
    $CR = $_POST['CR']; 
}

mysqli_query($conexion,"INSERT INTO o_compra(Direccion_de,Telefono_de,Email_de,Email_2,Web,Senores,Direccion_para,Email_para,Codigo,Nom,Telefono_para,Celular,Cantidad,U_medida,Descr,Ref,Val_un,Observaciones,Solicitado_por,Generado_por,Fecha)  SELECT Direccion_de,Telefono_De,Email_de,Email_2,Web,Nombre,Direccion,Email,Codigo,Req,Telefono,Celular,Cantidad,Unidad_de_medida,Descripcion,Ref,Valor_unit,Observaciones,Solicitado_por,Verificado_por,Fecha_de_solicitud FROM proveedores,materiales,fijos WHERE Codigo='$CP' AND Req='$CR' AND ID_F='1'");

header("location:Excel.php");
?>