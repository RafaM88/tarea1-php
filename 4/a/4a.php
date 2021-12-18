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
    <h1>Piedra, papel, tijera, lagarto, Spock</h1>
    <p>Esto es una variante del piedra, papel, tijera. Elige una opción del menú
      desplegable y la máquina elegirá una opción aleatoria. Más abajo tienes las reglas</p>
    </p>
    <form name="formulario1" action="resultado4a.php" method="GET">
    <label for="opcion">Escoge una opción</label><br>
      
    <select name="opcion" id="opcion">
      <option value="1">Piedra</option>
      <option value="2">Papel</option>
      <option value="3">Tijera</option>
      <option value="4">Lagarto</option>
      <option value="5">Spock</option>
      
</select><br>
       <input type="submit" value="Enviar">
    </form>
    
    
    <div class="contenedor">
    <h4>Reglas</h4>
      <p>Piedra gana a Tijera</p>
      <p>Tijera gana a Papel</p>
      <p>Papel gana a Spock</p>
      <p>Spock gana a Piedra</p>
      <p>Piedra gana a Lagarto</p>
      <p>Lagarto gana a Spock</p>
      <p>Spock gana a Tijera</p>
      <p>Tijera gana a Lagarto</p>
      <p>Lagarto gana a Papel</p>  
      <p>Papel gana a Piedra</p>
  </div>  
    <img src="reglas.png" alt="Reglas del juego">
</body>
</html>