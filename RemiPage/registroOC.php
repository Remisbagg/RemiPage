<?php
$conexion = mysqli_connect("localhost","root","") or
die("F");
mysqli_select_db($conexion,"id19529191_blintech") or
die("F");
mysqli_set_charset($conexion,"UTF8");



if(isset($_POST['CP'])){
    $CP = $_POST['CP']; 
}
if(isset($_POST['CR'])){
    $CR = $_POST['CR']; 
}

mysqli_query($conexion,"INSERT INTO o_compra(Direccion_de,Telefono_de,Email_de,Email_2,Web,Senores,Direccion_para,Email_para,Codigo,Nom,Telefono_para,Celular,Cantidad,U_medida,Descr,Ref,Val_un,Observaciones,Solicitado_por,Generado_por,Fecha)  SELECT Direccion_de,Telefono_De,Email_de,Email_2,Web,Nombre,Direccion,Email,Codigo,Req,Telefono,Celular,Cantidad,Unidad_de_medida,Descripcion,Ref,Valor_unit,Observaciones,Solicitado_por,Verificado_por,Fecha_de_solicitud FROM proveedores,materiales,fijos WHERE Codigo='$CP' AND Req='$CR' AND ID_F='1'");

header("location:Excel.php");
?>