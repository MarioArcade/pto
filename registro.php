
<html>
  <head>
    <meta charset="utf-8">
    <!----------- ICONO TITULO ------------>
    <link rel="shortcut icon" href="images/logo_title2.ico" type="image/x-icon">
    <title>Shop.Ind</title>
    <link rel="stylesheet" href="css/stylesreg.css">
  </head>
  <body>
        <!------------- lOGO SITIO ------------->
<a href="index.php" class="linkimg"><img src="images/logo.png" alt="" class="imagen_header"></a>
             <!-------------SLIDER  ----------------->
<br><br>
    <section class="registro">
        <div >
        <h2>Registro</h2>
        <h5>Todos los campos son requeridos</h5>
        <form class="" action="" method="post">
          <label for="nombre">Nombre: </label><br>
          <input type="text" name="nombre" id="nombre" value=""><br>
          <label for="apellido">Apelido: </label><br>
          <input type="text" name="apellido" id="apellido" value=""><br>
          <label for="usuario">Usuario: </label><br>
          <input type="text" name="usuario" id="usuario" value=""><br>
          <label for="email">Email: </label><br>
          <input type="email" name="email" id="email" value=""><br>
          <label for="pass">Contraseña: </label><br>
          <input type="password" name="pass" id="contraseña" value=""><br>
          <label for="confirmpass">Confirmar Contraseña: </label><br>
          <input type="password" name="confirmpass" id="contraseña" value=""><br>
          <br>
          <input type="checkbox" name="" value="">
          <label for="">Acepto terminos y condiciones</label><br><br>
          <input type="checkbox" name="" value="">
          <label for="">Deseo recibir correos con las ofertas</label><br><br>
          <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php
        if (isset($_POST['enviar'])) {
          require("reg.php");
        }
         ?>
      </div>
    </section>
  </body>
</html>
