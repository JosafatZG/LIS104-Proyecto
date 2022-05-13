<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Orden</title>
      
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
		<style><?php include "assets/css/estiloscategoria.css" ?></style>
	</head>
	
	<body>

	<header>
   

        <img src="assets/images/logo.png" class="logo">
        <form class="menu">
            <input type="button" id="inicio" name="inicio" value="Inicio" class="submit" onclick="location.href='?c=pedidos';" />
            <input type="button" id="categorias" name="categorias" value="Categorías" class="submit" onclick="location.href='?c=pedidos&a=viewcategorias';"/>
            <input type="button" id="categorias" name="categorias" value="Orden" class="submit" onclick="location.href='?c=pedidos&a=vieworden';"/>
            <input type="button" id="login" name="login" value="Iniciar Sesión" class="submit" onclick="location.href='?c=login';"/>
            <input type="image" src="assets/images/carrito.png" name="carrito" class="carrito"/>

             <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <div class="submitLog">
    	<p>Bienvenid@ <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" id="logout" name="logout">logout</a> </p>
        </div>
    <?php endif ?>

         </form>
         
    </header>


		<div class="container">		
			
			<a onclick="location.href='?c=pedidos&a=viewordencombo';" class="btn btn-primary">Agregar</a>
			
			<br />
			<br />
			<div class="table-responsive">
				<table width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>Productos</th>
							<th>Precio</th>
						</tr>
					</thead>
				</table>
	</body>
</html
