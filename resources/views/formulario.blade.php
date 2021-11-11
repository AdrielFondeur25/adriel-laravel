<!DOCTYPE html>
<html>
  <head>
    <title>Avengers</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.png" width="9999999999999">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style_formulario.css">

    <!-- las tres siguientes líneas son un truco para obtener elementos semánticos de HTML5 que funcionan en versiones de Internet Explorer antiguas -->
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body background="img/fondo1.jpg">
    <!-- Aquí empieza el encabezado principal que se mantendrá en todas las páginas del sitio web -->
    <header> 
    <center><img src="img/logo.png" alt="a simple dove logo"></center>
    </header>


    <ul class="menu-nav">
			<li><a href="index.html">Inicio</a></li>
			<li><a href="#article">Historia</a></li>
			<li><a href="#slider">Galeria</a></li>
			<li><a href="#footer">Acerca De</a></li>
			<li><a href="Formulario/formulario.html">Contacto</a></li>
		</ul>

    
      
    <!-- Aquí está el contenido principal de nuestra página -->
 

    <section class="form-register">
      <center><img src="img/logo.png" alt="a simple dove logo" width="400"></center>
      <br><br>
      <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
      <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
      <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
      <input class="controls" type="text" name="numero" id="numero" placeholder="Ingrese su Número">
      <input class="controls" type="password" name="correo" id="correo" placeholder="Ingrese su Contraseña">
      <input class="botons" type="submit" value="Registrar">
    </section>
    <br><br><br><br><br><br><br><br>




    <!-- Y aquí está nuestro pie de página principal que se utiliza en todas las páginas de nuestro sitio web -->
    <footer id="footer">
      <br><br>
      <div class="footer-content">
          <center><img src="img/logo.png" alt="a simple dove logo" width="400"></center>
          <p>!Vengadores Reunidos!</p>
          <ul class="socials">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
          </ul>
      </div>
      <div class="footer-bottom">
          <p class="text-footer">copyright &copy;2021 MarvelStudios. Diseñado por: <span>❤ Adriel Fondeur ❤</span></p>
      </div>
  </footer>
  </body>
</html>
