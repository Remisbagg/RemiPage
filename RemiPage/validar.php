<?php
$conexion = mysqli_connect("localhost","root","") or
die("F");
mysqli_select_db($conexion,"id19529191_blintech") or
die("F");

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