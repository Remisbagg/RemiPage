<?php
$conexion = mysqli_connect("localhost","root","") or
die("F");
mysqli_select_db($conexion,"id19529191_blintech") or
die("F");
mysqli_set_charset($conexion,"utf8");

if(isset($_POST['Prom'])){
    $Prome = $_POST['Prom']; 
}
$docu="Calificacion.xls";
$queryS=mysqli_query($conexion,"SELECT * FROM calificaciones WHERE Cod_provee=$Prome");
$cuenta=mysqli_query($conexion,"SELECT COUNT(*) FROM calificaciones WHERE Cod_provee=$Prome");
$result = $cuenta->fetch_array();
$quantity = intval($result[0]);
$casiFinal=3+$quantity;


header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename='.$docu);
header('Pragma: no-cache');
header('Expires:0');

echo'<table border=1>';
echo'<tr >';
echo'<th colspan=6>PROMEDIO</th>';
echo'<th style="width:100px">PROM</th>';
echo'</tr>';
echo'<tr>';
echo'<th colspan=7>PROMEDIO DE CALIFICACIONES</th>';
echo'</tr>';
echo'<tr><th>Numero de Factura</th><th>Numero de Requisicion</th><th>Codigo de proveedor</th><th>Tiempo de entrega</th><th>Calidad</th><th>Servicio</th><th>Promedio</th></tr>';
while ($row=mysqli_fetch_array($queryS)) {
    $prom=$row['T_E']+$row['Calidad']+$row['Servicio'];
    $total ='=('.$prom.'/3)';
    echo'<tr>';
    echo'<td>'.$row['Factura_No'].'</td>';
    echo'<td>'.$row['Req_No'].'</td>';
    echo'<td>'.$row['Cod_provee'].'</td>';
    echo'<td>'.$row['T_E'].'</td>';
    echo'<td>'.$row['Calidad'].'</td>';
    echo'<td>'.$row['Servicio'].'</td>';
    echo'<td>'.$total.'</td>';
    echo'</tr>';
}
echo '<tr style="text-align: left"><th style="text-align: left" colspan=6>PROMEDIO TOTAL</th><th>=(SUMA(G4:G'.$casiFinal.'))/'.$quantity.'</th></tr>';
echo'</table>';
?>
