<?php 
  session_start(); 
    /*
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ?c=login');
  }
  */
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ?c=login");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!--<link rel="stylesheet" href="estilosindex.css">-->
    <style><?php include "assets/css/estilosinicio.css" ?></style>
</head>
<body>
  
    <!-- notification message -->
  	<?php  if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

    <header>
        <img src="assets/images/logo.png" class="logo">
        <form class="menu">
            <input type="button" id="inicio" name="inicio" value="Inicio" class="submit" onclick="location.href='?c=pedidos';" />
            <input type="button" id="categorias" name="categorias" value="Categorías" class="submit" onclick="location.href='?c=pedidos&a=viewcategorias';"/>
            <input type="button" id="login" name="login" value="Iniciar Sesión" class="submit" onclick="location.href='?c=login';"/>
            <input type="image" src="assets/images/carrito.png" name="carrito" class="carrito"/>
        </form>
    </header>
    <div>
        <section>
            <form class="bf">
                <p class="pregunta">¿QUÉ TE APETECE PEDIR HOY?</p><br>
                <input type="button" id="ordenar" name="ordenar" class="pedir" value="Ordenar" onclick="location.href='?c=pedidos&a=viewcategorias';"/>
            </form>
        </section> 
    </div>
    <div>
        <section>
            <img src="assets/images/hamburguesa.png" class="hamburguesa">
        </section> 
    </div>

     
    <footer>
                    <div>
                        <img src="assets/images/logoinsta.png" class="logoinsta"><p class="instagram">@volcanorestaurantsv</p>
                        <!--/<h2 class="instagram1">Síguenos en nuestro Instagram</h2>-->
                        <p class="derechos">&#169 2022 Volcano Restaurant, Todos los derechos reservados.</p>
                    </div>
                </footer>


</body>
</html>