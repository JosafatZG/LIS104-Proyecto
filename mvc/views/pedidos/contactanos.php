<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contactanos</title>

  <style><?php include "assets/css/stylecontacts.css" ?></style>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
  <script defer src="assets/js/contactanos.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>

<body>
  <header class="header">
    <nav class="nav">
      <a href="#" class="logo nav-link">Restaurante Volcano</a>
      <button class="nav-toggle" aria-label="Abrir menú">
        <i class="fas fa-bars"></i>
      </button>
      <ul class="nav-menu">
        <li class="nav-menu-item">
          <a href='?c=pedidos' class="nav-menu-link nav-link"><i class="fas fa-arrow-alt-circle-left"></i>Inicio</a>
        </li>
      </ul>
    </nav>
  </header>
  <main>
    <form action="https://formsubmit.co/anasulma1230@gmail.com" method="POST" data-netlify="true" name="contact">
      <h2>Enviar Formulario</h2>
      <input type="text" name="nombre" placeholder="Nombre" required>
      <input type="text" name="correo" placeholder="Correo" required>
      <input type="text" name="telefono" placeholder="Telefono" required>
      <textarea name="mensaje" placeholder="Escriba aqui su mensaje" required></textarea>
      <input type="submit" class="submit" value="Enviar" id="boton">

    </form>

  </main>
</body>

</html>