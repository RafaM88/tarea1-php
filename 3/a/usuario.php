<?php
  if((isset($_POST['nombre'])) && (!empty($_POST['nombre']))){
    $nombre = $_POST['nombre'];
    if(!preg_match("/^[a-zÁÉÍÓÚ][ a-záéíóúÁÉÍÓÚ]+$/i",$nombre)){
      $nombre="Nombre introducido no válido";
    }
  }else{
    $nombre="El campo nombre no puede estar vacío";
  }  

  if((isset($_POST['mail'])) && (!empty($_POST['mail']))){
    $mail = $_POST['mail'];
    $mail=filter_var($mail,FILTER_SANITIZE_EMAIL);
    if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
    {
      $mail="Correo introducido no válido";
    }
  }else{
    $mail="El campo mail no puede estar vacío";
  }  

  if((isset($_POST['telefono'])) && (!empty($_POST['telefono']))){
    $telefono = $_POST['telefono'];
    
    if(!preg_match("/^[0-9]{9}$/",$telefono))
    {
      $telefono="Teléfono introducido no válido";
    }
  }else{
    $telefono="El campo teléfono lo has dejado vacío";
  }  

  if((isset($_POST['web'])) && (!empty($_POST['web']))){
    $web = $_POST['web'];
    $web=filter_var($web,FILTER_SANITIZE_URL);
    if(!filter_var($web,FILTER_VALIDATE_URL))
    {
      $web="Sitio web introducido no válido";
    }
  }else{
    $web="El campo sitio web lo has dejado vacío";
  }  

  if((isset($_POST['consulta'])) && (!empty($_POST['consulta']))){
    $consulta = $_POST['consulta'];
    $consulta=filter_var($consulta,FILTER_SANITIZE_STRING);
    if(!preg_match("/[a-z0-9]+/i",$consulta)){
      $consulta="Consulta introducida no válida";
    }
  }else{
      $consulta="El campo consulta no puede estar vacío";
    }
  

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Desarrollo Web en Entorno Servidor :: Unidad 1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="estilos.css">
      </head>
      <body>
      
      <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
          <div class="container-fluid">
           
            <ul class="nav navbar-nav">
              <li><a href="../../inicio.html">Inicio</a></li>
              <li><a href="../../1/1.html">Ejercicio 1</a></li>
              <li><a href="../../2/2.html">Ejercicio 2</a></li>
              <li><a href="../../3/a/formulario1.php">Ejercicio 3:Formulario 1</a></li>
              <li><a href="../../3/b/formulario2.php">Ejercicio 3:Formulario 2</a></li>
              <li><a href="../../4/a/4a.php">Ejercicio 4:Juego</a></li>
              <li><a href="../../4/b/4b.php">Ejercicio 4:Circunferencia</a></li>
              <li><a href="../../4/c/4c.php">Ejercicio 4:Salud</a></li>
              <li><a href="../../5/5.php">Ejercicio 5: Control de versiones</a></li>
            </ul>
          </div>
        </nav>
    
 



    <form name="formulario1.php" action="usuario.php" method="post">
        <h2>Resultado del formulario</h2>
        
        
        <input type="text" name="nombre" value="<?php echo $nombre; ?>" disabled="disabled"/><br>
        <input type="email" name="mail" value=" <?php echo $mail; ?>" disabled="disabled"/><br>
        <input type="tel" name="nombre" value="<?php echo $telefono ?>" disabled="disabled"/><br>
        <input type="url" name="web" value="<?php echo $web ?>" disabled="disabled"/><br>
        <textarea disabled="disabled"><?php echo $consulta ?></textarea><br />
        <a href="formulario1.php">Volver</a>
    </form>
    
</body>