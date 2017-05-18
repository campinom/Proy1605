<?php
session_start();
$_SESSION["saludo"]="Hola Mundo";
?>
<?php
$PATH='lib/';
include $PATH.'Conexion.php';
include $PATH.'Usuario.php';
$oUsr=new Usuario();
$oUsr->nombre=$_POST['nombre'];
$oUsr->clave=$_POST['clave'];

if($oUsr->VerificaUsuarioClave())
   $_SESSION['USR']=$oUsr;



header('Location:http://localhost:8081/proy1605/')
/*session_start();
var_dump($_SESSION);*/



?>