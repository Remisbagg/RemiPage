<?php
session_start();
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


ob_start();
$Ususario=$_SESSION['Usuario'];
if(!isset($Ususario)){
    header("location:Login.html");

}
ob_end_flush();
?>


<!DOCTYPE html>
<html style="background-color: Black;" lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Logo.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>RemiRec</title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap_1.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome_1.css">

    <link rel="stylesheet" href="assets/css/styleIn.css">

    </head>
    
<body>

<body style="background-color: Black;">
<table  style="color: white;" class="table table-sm">
    <th style="text-align:center;" colspan=12>REQUISICION DE MATERIALES</th>
      <tr>
        <th scope="col">Fecha de solicitud</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Unidad de medida</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Referencia</th>
        <th scope="col">Valor unitario</th>
        <th scope="col">Orden de pedido</th>
        <th scope="col">Codigo de proveedor</th>
        <th scope="col">Vendedor</th>
        <th scope="col">Solicitado por</th>
        <th scope="col">Verificado por</th>
        <th scope="col">Req No.</th>
      </tr>
    </thead>


<?php
$sql="SELECT * from materiales";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){

?>

    <tbody>
      <tr style="color: white;">
        <td><?php echo $mostrar['Fecha_de_solicitud'] ?></td>
        <td><?php echo $mostrar['Cantidad'] ?></td>
        <td><?php echo $mostrar['Unidad_de_medida'] ?></td>
        <td><?php echo $mostrar['Descripcion'] ?></td>
        <td><?php echo $mostrar['Ref'] ?></td>
        <td><?php echo $mostrar['Valor_unit'] ?></td>
        <td><?php echo $mostrar['OdeP'] ?></td>
        <td><?php echo $mostrar['Codigo_de_proveedor'] ?></td>
        <td><?php echo $mostrar['Vendedor'] ?></td>
        <td><?php echo $mostrar['Solicitado_por'] ?></td>
        <td><?php echo $mostrar['Verificado_por'] ?></td>
        <td><?php echo $mostrar['Req'] ?></td>
      </tr>
<?php
}
?>
  </table>


<div class="caption">
    <div class="center">
        <div class="main-button scroll-to-section">
            <a href="Principal.php">Volver</a>
        </div>
    </div>
</div>


</body>
</html>