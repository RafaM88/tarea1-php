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
              <li><a href="../inicio.html">Inicio</a></li>
              <li><a href="../1/1.html">Ejercicio 1</a></li>
              <li><a href="../2/2.html">Ejercicio 2</a></li>
              <li><a href="../3/a/formulario1.php">Ejercicio 3:Formulario 1</a></li>
              <li><a href="../3/b/formulario2.php">Ejercicio 3:Formulario 2</a></li>
              <li><a href="../4/a/4a.php">Ejercicio 4:Juego</a></li>
              <li><a href="../4/b/4b.php">Ejercicio 4:Circunferencia</a></li>
              <li><a href="../4/c/4c.php">Ejercicio 4:Salud</a></li>
              <li><a href="../5/5.php">Ejercicio 5: Control de versiones</a></li>
            </ul>
          </div>
        </nav>
    <?php 
        $sitio =$_SERVER['PHP_SELF'];
        if(isset($_GET['tabla'])){
            mostrar();
        }else{
            solicitar();
        }

        function solicitar(){
            ?>
                <form method="get" action="<?php echo $GLOBALS['sitio'] ?>">
                Introduce un número para calcular su tabla.
                <input type="number" name="tabla" placeholder="Escribe un número">
                <input type="Submit" value="Enviar">
                <br>
                También puedes añadir <em>?tabla=</em> seguido de un número entero al final de la URL.
                Por ejemplo: <em>?tabla=2</em> para obtener la tabla del 2. 
            <?php
        }
        function mostrar(){
            ?>
            <h2>Tabla de multiplicar del <?php echo $_GET['tabla'] ?></h2>
            <?php
            for($i=1;$i<=10;$i++){
                ?><p><?php echo $_GET['tabla']; ?> x <?php echo $i; ?> = <?php echo $_GET['tabla']*$i; ?></p>
                <?php
            }
            ?>
         <p>Cambia el número al final de la URL para calcular la tabla de multiplicar de otro número o pulsa 
         <a href="calculadora.php">aquí</a> para volver al formulario.</p>
         <?php
        }
        
       
    ?>
   
  
</body>