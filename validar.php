<?php
$servername = "remiserver.mysql.database.azure.com";
$username = "Remisbagg";
$password = "Estudiocolegio1";
$dbname = "remi_base";

// Crear conexión
$conexion = mysqli_init();
mysqli_ssl_set($conexion, NULL, NULL, "BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);

// Crear conexión segura
mysqli_real_connect($conexion, $servername, $username, $password, $dbname, 3306, NULL, MYSQLI_CLIENT_SSL);


// Verificar conexión
if (!$conexion) {
  die("La conexión falló: " . mysqli_connect_error());
}

mysqli_set_charset($conexion,"utf8");

if(isset($_POST['usuario'])){
    $Usuario = $_POST['usuario']; 
}
if(isset($_POST['clave'])){
    $Clave = $_POST['clave']; 
}


$resultado=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$Usuario' and Clave='$Clave'");
$filas=mysqli_num_rows($resultado);

if($filas){
    session_start();
    $_SESSION['Usuario']=$Usuario;
    header("location:Principal.php");

}
else{
    header("location:errPage.html");
}



mysqli_free_result($resultado);
mysqli_close($conexion);
?>