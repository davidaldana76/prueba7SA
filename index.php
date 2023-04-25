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
  
  <header class="ancho">
    <picture>
      <img src="logo_tec.png" alt="">
    </picture>

    <nav>
      <a href="#">Inicio</a>
      <a href="#">Quienes somos</a>
      <a href="#">Servicio</a>
      <a href="#">Ubicación</a>
      <a href="#">contacto</a>
    </nav>
  </header>


  <section class="ancho">

  <article>

  <h1>Contacto</h1>

  <div class="formularios">
    <form action="mostrardatos.php" method="post" name="fomr">

      <label for="">Nombre:</label>
      <input type="text" name="nombre" required>
      <br>
      <label for="">Apellido:</label>
      <input type="text" name="apellido" >
      <br>
      <label for="">Matricula:</label>
      <input type="text" name="matricula" required>
      <br>
      <label for="">Carrera:</label>
      <input type="text" name="carrera" >
      <br>

        <button type="submit" value="Enviar" >Enviar</button>
    
    </form>
  
  
  </div>

  </article>

  </section>


  <footer class="ancho" >
    <h4>Instituto Tecnologico de Mérida Av. Tecnologico km. 4.5 S/N C.P. 97118 </h4>
    <br>
    <h4>Preguntas y comentarios: www.@itmerida.mx</h4>
  </footer>


</body>
</html>