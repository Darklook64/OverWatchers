<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OverWatch</title>
  </head>
  <body>
    <form class="formularioLogin" action="controlador/validar.php" method="post">
        <input type="email"
         name="txtCorreo"
          placeholder="Ingrese su Email"
           required="required">

           <br>
        <input type="password"
         name="txtPass"
          placeholder="Escriba su password"
          required="required">
          <br>
          <input type="submit"
          name="btnEnviar"
          value="Login">



    </form>
    <?php  ?>
  </body>
</html>
