<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$confirmpass = $_POST["confirmpass"];
$campos = strlen($nombre) * strlen($apellido) * strlen($usuario) * strlen($email) * strlen($pass) * strlen($confirmpass);
if ($campos > 0) {
if ($pass===$confirmpass) {
require("connect_db.php");
$pass = md5($pass);
$db="INSERT INTO usuarios (nombre,apellido,usuario,mail,pass) VALUES('', '$nombre', '$apellido', '$usuario','$email' ,'$pass')";
mysql_query($db );
mysql_close($link);
echo "ok";
}else {
  echo "Las contraseñas no coinciden";
}
}else {
  echo "Complete todos los campos";
}
 ?>
