
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Identificar Número</title>
</head>
<body>
    <h2>Identificar si un número es positivo, negativo o cero</h2>
    <form action="ejercicio.php" method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="text" name="numero">
        <br>
        <input type="submit" value="Identificar">
    </form>
</body>
</html>
<br>

<?php

 $numero =  isset($_POST["numero"]) ? $_POST["numero"]:0;

    // Identificar si el número es positivo, negativo o cero
    if ($numero > 0) {
        echo  "El número es positivo.";
    } elseif ($numero < 0) {
        echo  "El número es negativo.";
    } else {
        echo "El número es cero.";
    }


?>
<br>
<br>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular Promedio</title>
</head>
<body>
    <h2>2.	Determinar si un aprendiz aprobó la materia dadas tres notas,
     la materia se aprueba con 3.5, el sistema deberá mostrar un mensaje de aprobó o reprobó</h2>
    <form action="ejercicio.php" method="post">
        <label for="nota1">Nota1:</label>
        <input type="number" name="nota1" required>
        <br>
        <br>
        <label for="nota2">Nota2:</label>
        <input type="number" name="nota2" required>
        <br>
        <br>
        <label for="nota3">Nota3:</label>
        <input type="number" name="nota3" required>
        <br>
        <br>
        <input type="submit" value="Calcular Promedio">
    </form>
</body>
</html>

<?php

    $Nota1 = isset($_POST["nota1"]) ?  $_POST["nota1"] :0;
    $Nota2 = isset($_POST["nota2"]) ?  $_POST["nota2"] :0;
    $Nota3 = isset($_POST["nota3"]) ?  $_POST["nota3"] :0;

    $promedio = ($Nota1 + $Nota2 + $Nota3) / 3;

    if ($promedio >= 3.5) {
        echo 'Aprobaste la materia. Tu promedio es: ' . $promedio;
    } else {
        echo 'Reprobaste la materia. Tu promedio es: ' . $promedio;
    }
 
?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <h2>Hallar la hipotenusa de un triángulo dados sus catetos, para caso d, para el caso de PHP basta con ejecutar la función sqrt()</h2>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hipotenusa</title>
</head>
<body>

<form action="ejercicio.php" method="post">
    <label for="cateto_a">Cateto A:</label>
    <input type="number" step="0.1" name="cateto_a">
    <br>
    <br>
    <label for="cateto_B">Cateto B:</label>
    <input type="number" step="0.1" name="cateto_B">
    <br>
    <br>
    <input type="submit" value="Calcular hipotenusa">
</form>

<br>

<?php
$cateto_A = isset($_POST["cateto_a"]) ? $_POST["cateto_a"] : 0;
$cateto_B = isset($_POST["cateto_B"]) ? $_POST["cateto_B"] : 0;

$hipotenusa = sqrt($cateto_A**2 + $cateto_B**2);
echo 'La hipotenusa del triángulo con catetos '.$cateto_A.' y '.$cateto_B.' es '.$hipotenusa;
?>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>ingresar edad</title>
</head>
<body>
    <h2>Identificar si dada una edad en que generacion  esta la persona</h2>
    <form action="ejercicio.php" method="post">
        <label for="ingrese su edad">Ingrese Edad</label>
        <input type="number" name="ingrese_Edad">
        <br>
        <br>
        <input type="submit" name="verificar" value="verificar">
    </form>
</body>
</html>


<?php
 $ingrese_Edad= isset($_POST['ingrese_Edad']) ? $_POST['ingrese_Edad']: 0;

 if ($ingrese_Edad>0 && $ingrese_Edad <=12){
    echo 'eres un niño';
 }else if ($ingrese_Edad> 13 && $ingrese_Edad <=21){
    echo'eres un adolescente';
 }else if($ingrese_Edad>21 && $ingrese_Edad <=31){
    echo'eres joven';
 }else if($ingrese_Edad>31 &&$ingrese_Edad <=60){
    echo"eres un adulto";
 }else{
    echo 'eres un anciano';
 }
?>
