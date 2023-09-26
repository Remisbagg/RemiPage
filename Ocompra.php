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
    <title>Orden De Compra</title>
    <meta charset="utf-8">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Logo.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">

    <!-- FUENTES -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

</head>

<body style="background-color:black;">


    <!-- Header -->
<section class="bg_secheader">
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="Principal.php">
                BLINTECH SECURITY
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</section>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Open Content -->
    <section class=".bg_psec">
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="assets/img/Orden9.jpg" alt="Card image cap" id="product-detail">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">Generar orden de compra</h1>

                            <h6>Descripción:</h6>
                            <p>Bienvenido al area para generar una orden de compra, a continuación podra generar una orden de compra ingresando: el codigo de proveedor, para determinar el proveedor de la orden de compra y el codigo de requisición para determinar datos del producto, el resto de la innformacion se generara automaticamente.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Indicaciones:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>Al oprimir el boton "Generar Orden" se descargara la orden de compra como documento .xls en su dispositivo.</strong></p>
                                </li>
                            </ul>

                            <h6>Advertencias:</h6>
                            <ul class="list-unstyled pb-3">
                                <li>1- Tenga presente que si no hay registrados datos previamente, no se generara la orden.</li>
                                <li>2- Es importante que el codigo de proovedor como el codigo de requisición existan.</li>
                                <li>3- Debe haber registrado los datos necesarios antes de seleccionar alguna opción.</li>
                            </ul>

                            <form action="registroOC.php" method="post">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <input type="text" placeholder="CODIGO DE PROVEEDOR" name="CP">
                                        <p></p>
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" >Generar Orden</button>
                                    </div>
                                    <div class="col d-grid">
                                        <input type="text" placeholder="NUMERO DE REQUISICIOÓN" name="CR">
                                        <p></p>
                                        <button  onclick="history.back()" class="btn btn-success2 btn-lg" name="submit">Generar</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>


</body>

</html>