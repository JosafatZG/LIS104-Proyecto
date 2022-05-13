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
		
		<!-- CATEGORIA ORIGINALS -->
		<div class="combo">
		<Label>Categoria: Originals</Label>	
		<select>
		<?php foreach($data["info"] as $dato):
		if($dato["categoria"] == 1){?>
		<option value="<?php echo $dato["id"]?>"><?php echo $dato["nombre"]?></option>
		<?php }
		endforeach?>
		</select>
		<input type="button" id="" name="" value="Agregar" class="btn btn-primary"  />
		</div>

		<!-- CATEGORIA NOVEDADES -->
		<div class="combo">
		<Label>Categoria: Novedades</Label>	
		<select>
		<?php foreach($data["info"] as $dato):
		if($dato["categoria"] == 2){?>
		<option value="<?php echo $dato["id"]?>"><?php echo $dato["nombre"]?></option>
		<?php }
		endforeach?>
		</select>
		<input type="button" id="" name="" value="Agregar" class="btn btn-primary"  />
		</div>

		<!-- CATEGORIA MENU PARRILLA -->
		<div class="combo">
		<Label>Categoria: Menú Parilla</Label>	
		<select>
		<?php foreach($data["info"] as $dato):
		if($dato["categoria"] == 3){?>
		<option value="<?php echo $dato["id"]?>"><?php echo $dato["nombre"]?></option>
		<?php }
		endforeach?>
		</select>
		<input type="button" id="" name="" value="Agregar" class="btn btn-primary"  />
		</div>

		<!-- CATEGORIA MENU POLLO -->
		<div class="combo">
		<Label>Categoria: Menú pollo</Label>	
		<select>
		<?php foreach($data["info"] as $dato):
		if($dato["categoria"] == 4){?>
		<option value="<?php echo $dato["id"]?>"><?php echo $dato["nombre"]?></option>
		<?php }
		endforeach?>
		</select>
		<input type="button" id="" name="" value="Agregar" class="btn btn-primary"  />
		</div>

		<!-- CATEGORIA 100% VEGETAL -->
		<div class="combo">
		<Label>Categoria: 100% Vegetal</Label>	
		<select>
		<?php foreach($data["info"] as $dato):
		if($dato["categoria"] == 5){?>
		<option value="<?php echo $dato["id"]?>"><?php echo $dato["nombre"]?></option>
		<?php }
		endforeach?>
		</select>
		<input type="button" id="" name="" value="Agregar" class="btn btn-primary"  />
		</div>

		<!-- CATEGORIA SNACKS -->
		<div class="combo">
		<Label>Categoria: Snacks</Label>	
		<select>
		<?php foreach($data["info"] as $dato):
		if($dato["categoria"] == 6){?>
		<option value="<?php echo $dato["id"]?>"><?php echo $dato["nombre"]?></option>
		<?php }
		endforeach?>
		</select>
		<input type="button" id="" name="" value="Agregar" class="btn btn-primary"  />
		</div>

		<!-- CATEGORIA POSTRES -->
		<div class="combo">
		<Label>Categoria: Postres</Label>	
		<select>
		<?php foreach($data["info"] as $dato):
		if($dato["categoria"] == 7){?>
		<option value="<?php echo $dato["id"]?>"><?php echo $dato["nombre"]?></option>
		<?php }
		endforeach?>
		</select>
		<input type="button" id="" name="" value="Agregar" class="btn btn-primary"  />
		</div>

		<!-- CATEGORIA HAMBURGUESAS -->
		<div class="combo">
		<Label>Categoria: Hamburguesas</Label>	
		<select>
		<?php foreach($data["info"] as $dato):
		if($dato["categoria"] == 8){?>
		<option value="<?php echo $dato["id"]?>"><?php echo $dato["nombre"]?></option>
		<?php }
		endforeach?>
		</select>
		<input type="button" id="" name="" value="Agregar" class="btn btn-primary"  />
		</div>

		<!-- CATEGORIA SALSAS -->
		<div class="combo">
		<Label>Categoria: Salsas</Label>	
		<select>
		<?php foreach($data["info"] as $dato):
		if($dato["categoria"] == 9){?>
		<option value="<?php echo $dato["id"]?>"><?php echo $dato["nombre"]?></option>
		<?php }
		endforeach?>
		</select>
		<input type="button" id="" name="" value="Agregar" class="btn btn-primary"  />
		</div>

		<!-- CATEGORIA SIN GLUTEN -->
		<div class="combo">
		<Label>Categoria: Sin gluten</Label>	
		<select>
		<?php foreach($data["info"] as $dato):
		if($dato["categoria"] == 10){?>
		<option value="<?php echo $dato["id"]?>"><?php echo $dato["nombre"]?></option>
		<?php }
		endforeach?>
		</select>
		<input type="button" id="" name="" value="Agregar" class="btn btn-primary"  />
		</div>

		<!-- CATEGORIA ENSALADAS -->
		<div class="combo">
		<Label>Categoria: Ensaladas</Label>	
		<select>
		<?php foreach($data["info"] as $dato):
		if($dato["categoria"] == 11){?>
		<option value="<?php echo $dato["id"]?>"><?php echo $dato["nombre"]?></option>
		<?php }
		endforeach?>
		</select>
		<input type="button" id="" name="" value="Agregar" class="btn btn-primary"  />
		</div>

		<!-- CATEGORIA BEBIDAS -->
		<div class="combo">
		<Label>Categoria: Bebidas</Label>	
		<select name="cmbbebidas">
		<?php foreach($data["info"] as $dato):
		if($dato["categoria"] == 12){?>
		<option value="<?php echo $dato["id"]?>"><?php echo $dato["nombre"]?></option>
		<?php }
		endforeach?>
		</select>
		<input type="button" id="bebidas" name="btnbebidas" value="Agregar" class="btn btn-primary" onclick="location.href='?c=pedidos&a=viewpedido';" />
		</div>

		<!-- CATEGORIA CAFÉ -->
		<div class="combo">
		<Label>Categoria: Café</Label>	
		<select>
		<?php foreach($data["info"] as $dato):
		if($dato["categoria"] == 13){?>
		<option value="<?php echo $dato["id"]?>"><?php echo $dato["nombre"]?></option>
		<?php }
		endforeach?>
		</select>
		<input type="button" id="" name="" value="Agregar" class="btn btn-primary"  />
		</div>

	</body>
</html>