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
$docu="Orden_de_compra.xls";
$query=mysqli_query($conexion,"SELECT * FROM o_compra ");
$queryS=mysqli_query($conexion,"SELECT * FROM o_compra WHERE ID_OC=1");
$rowN = mysqli_fetch_array($queryS);
$cuenta=mysqli_query($conexion,"SELECT COUNT(*) FROM o_compra");
$result = $cuenta->fetch_array();
$quantity = intval($result[0]);
$casiFinal=15+$quantity;
$iva=$casiFinal+1;
$totall=$casiFinal+2;


header('Content-type: application/vnd.ms-excel; charset=utf-8');
header('Content-Disposition: attachment; filename='.$docu);
header('Pragma: no-cache');
header('Expires:0');

echo'<table border=1>';
echo'<tr >';
echo'<th colspan=5>FORMATO</th>';
echo'<th style="width:100px">PR-GA-1.V1</th>';
echo'</tr>';
echo'<tr>';
echo'<th colspan=6>ORDEN DE COMPRA</th>';
echo'</tr>';
echo '<tr style="text-align: left"><th style="text-align: left" colspan=5>No.</th><th>'.$rowN['Nom'].'</th></tr>';
echo '<tr style="text-align: left"><th style="text-align: left" colspan=5>Fecha</th><th>'.$rowN['Fecha'].'</th></tr>';
echo '<tr style="text-align: left"><th>Dirección</th><th style="text-align: left" colspan=5>'.$rowN['Direccion_de'].'</th></tr>';
echo '<tr style="text-align: left"><th>Telefono</th><th style="text-align: left" colspan=5>'.$rowN['Telefono_de'].'</th></tr>';
echo '<tr style="text-align: left"><th>Email</th><th style="text-align: left" colspan=5>'.$rowN['Email_de'].' /'.$rowN['Email_2'].'</th></tr>';
echo '<tr style="text-align: left"><th>Web</th><th style="text-align: left" colspan=5>'.$rowN['Web'].'</th></tr>';
echo '<tr style="text-align: left"><th colspan=6></th></tr>';
echo '<tr style="text-align: left"><th>Estimados</th><th style="text-align: left" colspan=3>'.$rowN['Senores'].'</th><th>Cod.</th><th>'.$rowN['Codigo'].'</th></tr>';
echo '<tr style="text-align: left"><th>Direccion</th><th style="text-align: left" colspan=3>'.$rowN['Direccion_para'].'</th><th>Telefono</th><th>'.$rowN['Telefono_para'].'</th></tr>';
echo '<tr style="text-align: left"><th>Email</th><th style="text-align: left" colspan=3>'.$rowN['Email_para'].'</th><th>Celular</th><th>'.$rowN['Celular'].'</th></tr>';
echo '<tr style="text-align: left"><th colspan=6></th></tr>';
echo '<tr style="text-align: left"><th colspan=6></th></tr>';
echo'<tr><th>Cantidad</th><th>Unid. Medida</th><th>Descripcion</th><th>Referencia</th><th>Valor Unit.</th><th>Valor Total</th></tr>';
while ($row=mysqli_fetch_array($query)) {
    $total=$row['Cantidad']*$row['Val_un'];
    echo'<tr  style="text-align: center">';
    echo'<td>'.$row['Cantidad'].'</td>';
    echo'<td>'.$row['U_medida'].'</td>';
    echo'<td>'.$row['Descr'].'</td>';
    echo'<td>'.$row['Ref'].'</td>';
    echo'<td style= ','mso-number-format:"\0022\0022#\,##0.00"','>'.$row['Val_un'].'</td>';
    echo'<td style=','mso-number-format:"\0022\0022#\,##0.00"','>'.$total.'</td>';
    echo'</tr>';
}
$casiI=16;
if($casiFinal=$casiI){
    echo '<tr style="text-align: left"><th style="text-align: left" colspan=5>SUBTOTAL</th><th style=','mso-number-format:"\0022\0022#\,##0.00"','>=(F'.$casiFinal.'+0)</th></tr>';
}
else{
    echo '<tr style="text-align: left"><th style="text-align: left" colspan=5>SUBTOTAL</th><th>=(SUM(F'.$casiFinal.':F'.$casiFinal.'))</th></tr>';
}
echo '<tr style="text-align: left"><th style="text-align: left" colspan=5>IVA</th><th style=','mso-number-format:"\0022\0022#\,##0.00"','>=(F'.$iva.'*19%)</th></tr>';
echo '<tr style="text-align: left"><th style="text-align: left" colspan=5>TOTAL</th><th style=','mso-number-format:"\0022\0022#\,##0.00"','>=(F'.$iva.'+F'.$totall.')</th></tr>';
echo '<tr style="text-align: left"><th>Observaciones</th><th colspan=5>'.$rowN['Observaciones'].'</th></tr>';
echo '<tr style="text-align: left"><th colspan=3>Solicitado Por:</th><th colspan=3>Generado Por:</th></tr>';
echo '<tr style="text-align: left"><th colspan=3>'.$rowN['Solicitado_por'].'</th><th colspan=3>'.$rowN['Generado_por'].'</th></tr>';
echo'</table>';
//mysqli_query($conexion,"TRUNCATE o_compra");
?>
<meta charset="utf-8">
