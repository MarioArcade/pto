<?php

class base{
  var $host,$usuario,$pass,$nombrebase;
  function conectar()
  {
    $conexion=mysql_connect($this->host,$this->usuario,$this->pass);
    return $conexion;
    }
    function crearbase(){
      $conexion=$this->conectar();
      if (!conexion) {
        die("no se pudo establecer coneccion".mysql_error());
      }
      if (mysql_query("CREATE DATABASE".$this->nombrebase,$this->conectar())){
        echo "se creo con exito";
      }else {
        die("no se pudo crear".mysql_error());
      }
      mysql_close($this->conectar());
    }
}
$mibase=new base()

$mibase->host="localhost";
$mibase->usuario="root";
$mibase->pass="";
$mibase->nombrebase="registro";
$mibase->crearbase();
 ?>
