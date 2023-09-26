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
<html lang="en">

<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Logo.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
       <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
<section class="bg_secheader">
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a  class="navbar-brand text-success logo h1 align-self-center" href="Principal.php">
                REMICORP SECURITY
            </a>
            <p class="text-center"style="color:white";><a href="crrar.php" class="btn btn-success">Cerrar Sesión</a></p>
        </div>
    </nav>
</section>
    <!-- Close Header -->

    <!-- Start Categories of The Month -->
    <section class="bg_psec">
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Bienvenido</h1>
                <p style="color:white";>
                    Bienvenido al sistema de registro de proveedores, requisición de materiales, generación  de ordenes de compra y calificación de ordenes de compra.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="proveedores.php"><img src="./assets/img/Mano.jpg" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3" style="color:white";>Registrar Proveedores</h5>
                <p class="text-center"style="color:white";><a href="proveedores.php" class="btn btn-success">Registrar</a></p>
                <p class="text-center"style="color:white";><a href="TablaP.php" class="btn btn-success">Ver Base De Datos</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="Ocompra.php"><img src="./assets/img/Orden.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3"style="color:white";>Generar Orden de Compra</h2>
                <p class="text-center"style="color:white";><a href="Ocompra.php" class="btn btn-success">Generar</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="Materiales.php"><img src="./assets/img/Materiales.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3"style="color:white";>Requisición de Materiales</h2>
                <p class="text-center"style="color:white";><a href="Materiales.php" class="btn btn-success">Requerir</a></p>
                <p class="text-center"style="color:white";><a href="TablaM.php" class="btn btn-success">Ver Base De Datos</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <h2 class="h5 text-center mt-3 mb-3"></h2>
                <p class="text-center"><a href="" class=""></a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="calificarHTML.php"><img src="./assets/img/Califi2.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3"style="color:white";>Calificar requisición de materiales</h2>
                <p class="text-center"style="color:white";><a href="calificarHTML.php" class="btn btn-success">Calificar</a></p>
                <p class="text-center"style="color:white";><a href="TablaC.php" class="btn btn-success">Ver Base De Datos</a></p>
            </div>
        </div>
    </section>
</section>

</body>

</html>