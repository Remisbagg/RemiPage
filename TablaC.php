<?php
session_start();
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
    

<body style="background-color: Black;">
<table  style="color: white;" class="table table-sm">
    <thead>
    <th style="text-align:center;" colspan=12>CALIFICIACIONES</th>
      <tr>
        <th scope="col">Factura No.</th>
        <th scope="col">Requisicion_No</th>
        <th scope="col">Codigo proveedor</th>
        <th scope="col">Tiempo de entrega</th>
        <th scope="col">Calidad</th>
        <th scope="col">Servicio</th>
      </tr>
    </thead>


<?php
$sql="SELECT * from calificaciones";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){

?>

    <tbody>
      <tr style="color: white;">
        <td><?php echo $mostrar['Factura_No'] ?></td>
        <td><?php echo $mostrar['Req_No'] ?></td>
        <td><?php echo $mostrar['Cod_provee'] ?></td>
        <td><?php echo $mostrar['T_E'] ?></td>
        <td><?php echo $mostrar['Calidad'] ?></td>
        <td><?php echo $mostrar['Servicio'] ?></td>
      </tr>
<?php
}
?>
  </table>


<div class="caption">
    <div class="center">
        <div class="main-button scroll-to-section">
         <a href="Promedio.php">Promediar</a>
            <br></br>
         </div>
        <div class="main-button scroll-to-section">
            <a href="Principal.php">Volver</a>
        </div>
    </div>
</div>


</body>
</html>