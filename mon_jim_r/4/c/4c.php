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
    <h1>Ecuación de Harris-Benedict</h1>
      <p>Introduce tus datos para calcular la tasa de metabolismo basal (TMB) y tu
        índice de masa corporal(IMC)</p>
      <p>La fórmula de Harris-Benedict es <b>(Peso x m) + (Estatura x h) - (Edad x e) + k</b></p>
      <p>Los valores se muestran en las siguiente tabla </p>
      <table border="1">
        <caption>Valores para la ecuación de Harrys-Benedict</caption>
        <tr class="impar">
          <td>Dato/sexo</td><td><b>Hombre</b><td><b>Mujer</b>
        </tr>
        <tr ><td>m</td><td>13.7516</td><td>9.5634</td></tr>
        <tr class="impar"><td>h</td><td>5.0033</td><td>1.8496</td></tr>
        <tr><td>e</td><td>6.7550</td><td>4.6756</td></tr>
        <tr class="impar"><td>k</td><td>66.4730</td><td>655.0955</td></tr>
      </table>
    <form name="formulario3" action="resultado4c.php" method="GET">
    <h3>Introduce tus datos</h3>  
    <h6>Para los valores decimales, escribe un punto</h6>
    <input type="text" name="peso"  placeholder="peso (en kg)" required="required">
     
       <br>

     <input type="radio" name="sexo" id="hombre" value="Hombre" >
     <label for="hombre">Hombre</label>
     <input type="radio" name="sexo" id="mujer" value="mujer" >
     <label for="mujer">Mujer</label> 
     <br>
     <input type="number" placeholder="Estatura en cm" name="estatura" required="required">
     <br>
     <input type="number" placeholder="Edad" name="edad" required="required">
     <br>
      
       <input type="submit" value="Enviar">
    </form>
    
</body>
</html>