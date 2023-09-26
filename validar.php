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