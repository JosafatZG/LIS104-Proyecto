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
		<input type="button" id="bebidas" name="btnbebidas" value="Agregar" class="btn btn-primary"  />
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