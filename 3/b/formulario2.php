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
    <form name="formulario2" action="cv.php" method="POST">
        <h2>Currículum Vitae</h2>
        <h6>Rellene los campos y pulse enviar</h6>
        <input type="text" name="nombre" placeholder="Nombre y apellidos" required="required"/><br>
        <input type="email" name="mail" placeholder="Correo electrónico" required="required"/><br>
        <input type="tel" name="telefono" placeholder="Teléfono" required="required" pattern="[0-9]{9}" required/><br>
        <input type="url" name="web" placeholder="Sitio web (opcional)" /><br>
        <input type="text" name="nivel" placeholder="Nivel del formación" required="required"/><br>
        Dominio de idiomas<br>
        <input type="checkbox" id="espanol" name="idiomas[]" value="Español"checked="checked">
        <label for="espanol">Español</label>
        <input type="checkbox" id="ingles" name="idiomas[]" value="Inglés">
        <label for="ingles">Inglés</label>
        <input type="checkbox" id="frances" name="idiomas[]" value="Francés">
        <label for="frances">Francés</label>
        <input type="checkbox" id="chino" name="idiomas[]" value="Chino">
        <label for="chino">Chino</label>
        <br>
        <textarea name="otros" placeholder="Escriba otros datos de interés"></textarea><br />
        <input type="submit" value="Enviar">

    </form>
    
</body>
</html>