<?php
    if(!isset($_GET['radio'])){
        $radio=0;
    }
    $radio=$_GET['radio'];

    if(!is_numeric($radio)){
        $radio="Valor introducido inválido";
        $longitud = "No se pudo calcular. Valor inválido";
        $area=$longitud;
    }else{
        $longitud = "La longitud es de ".round((2 * $radio * M_PI),2)." centímetros cuadrados";
        $area = "El área es de ".round((M_PI * $radio * $radio),2)." centímetros cuadrados";
         $radio = "Radio = ".$radio." centímetros";
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
    <form name="formulario1" action="resultado4b.php" method="GET">
       <input type="text" placeholder="<?php echo $radio ?>" disabled="disabled"><br>
       <input type="text" placeholder="<?php echo $longitud ?>" disabled="disabled"><br>
       <input type="text" placeholder="<?php echo $area ?>" disabled="disabled"><br>
       

      
       <button><a href="4b.php">Volver</a></button>
    </form>
    
</body>
</html>