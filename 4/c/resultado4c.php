<?php
    if(isset($_GET['sexo'])){
        if($_GET['sexo']=="Hombre"){
            $m=13.7516;
            $h=5.0033;
            $a=6.7550;
            $k=66.4730;
            $sexo="Sexo: Hombre";
        }else if($_GET['sexo']=="Mujer"){
            $m=9.5634;
            $h=1.8496;
            $a=4.6756;
            $k=655.0955;
            $sexo="Sexo: Mujer";
        }else{
            $sexo="Sexo no especificado";
        }
        
    }else{
        $m=0;
        $h=0;
        $a=0;
        $k=0;
        $sexo="Sexo no especificado";
    }
  
    if(isset($_GET['peso']) && (is_numeric($_GET['peso']))){
        
        $peso=$_GET['peso'];    
        
        }else{
            $peso="Peso introducido no válido";
        }
    

    if(isset($_GET['edad']) && (is_numeric($_GET['edad']))){
        
        $edad=$_GET['edad'];
    }else{
        $edad = "Edad introducida no válida";
    }

    if(isset($_GET['estatura']) && (is_numeric($_GET['estatura']))){
        
        $estatura=$_GET['estatura'];
    }else{
        $estatura = "Altura introducida no válida";
    }

   if((is_numeric($peso)) && (is_numeric($edad)) && (is_numeric($estatura))){
    $tmb=(($m*$peso+$estatura*$h-$edad*$a)+$k);
    $tmb="Tasa Metabólica Basal = ".$tmb." kcal/dia";
    $imc=round(($peso/(pow(($estatura/100),2))),1);
    if($imc<18.5){
        $imc=$imc." -> Bajo peso";
    }else if($imc>=18.5 && $imc<=24.99){
        $imc=$imc." -> Peso normal";
    }else{
        $imc="IMC: ".$imc." -> Obesidad";
    }
   }else{
    $tmb="No se pudo calcular TMB. Revisa todos los campos";
    $imc="No se pudo calcular IMC. Revisa todos los campos";
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
    <form name="formulario1"  method="GET">
        <b>Resultado de tus datos</b>
    <input type="text"  placeholder="<?php echo "Peso: ".$peso." kg"; ?>" disabled="disabled">
    <br>
    <input type="text"  placeholder="<?php echo $sexo; ?>" disabled="disabled"><br>
     <input type="text"  placeholder="<?php echo "Estatura: ".$estatura." cm"; ?>" disabled="disabled"><br>
     <input type="text"  placeholder="<?php echo "Edad: ".$edad." años"; ?>" disabled="disabled"><br>
     <input type="text"  placeholder="<?php echo $tmb; ?>" disabled="disabled"><br>
     <input type="text"  placeholder="<?php echo $imc; ?>" disabled="disabled"><br>
     
       <button><a href="4c.php">Volver</a></button>
    </form>
    
</body>
</html>