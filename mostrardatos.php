<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Document</title>
</head>
<body>

<?php 

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$matricula = $_POST["matricula"];
$carrera = $_POST["carrera"];

// echo "Mi nombre es: <span class='negritas'>".$nombre."<span>"."&nbsp".$apellido."y mi matricula es: ".$matricula."&nbsp de la carrera: ".$carrera;

?>

<table class="credencial" >

<tr>
  <td rowspan="3" class="fotocredencial" >David</td>
  <td class="
  nom" ><?php echo "<h2>".$nombre."&nbsp".$apellido."</h2>" ?></td>
</tr>

<tr>
  <td class="mat" ><?php echo "<h2>".$matricula."</h2>" ?></td>
</tr>

<tr>
  <td class="carrera" ><?php echo "<h2>".$carrera."</h2>" ?></td>
</tr>

</table>


</body>
</html>