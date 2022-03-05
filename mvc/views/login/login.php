<?php $username = ""; $errors = array(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include "assets/css/estilos.css" ?></style>
    <title>Inicio/Registro</title>
	<meta name="robots" content="noindex">
	<link  rel="icon"   href="https://imgur.com/Zdbcigj.png" type="image/png" />
	<link rel="canonical" href="https://codepen.io/ig_design/pen/KKVQpVP?editors=1111">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
	<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeConsoleRunner-d0f3648046d2aaca07bd0037b9e061a26c74a8a999b75672ad6a638cca641472.js"></script>
	<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-4793b73c6332f7f14a9b6bba5d5e62748e9d1bd0b5c52d7af6376f3d1c625d7e.js"></script>
	<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRuntimeErrors-4f205f2c14e769b448bcf477de2938c681660d5038bc464e3700256713ebe261.js"></script>

</head>
<body class="Back" >
    <a href="https://front.codes/" class="logo" target="_blank"></a>
	<a href="?c=pedidos" class="Back">⇠ Regresar</a>

	<div class="section">

		<div class="container">

			<div class="row full-height justify-content-center">

				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Iniciar Sesión</span><span>Registrarse</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<form method="post" action="?c=login&a=LoginUser">
								<?php include "config/errors.php" ?>
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="colortitle">Iniciar Sesión</h4>
											<div class="form-group">
												<input type="text" name="usuario_login" class="form-style" placeholder="Usuario" id="usuario_reg" autocomplete="off" value="<?php echo $data["userL"]; ?>">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password_login" class="form-style" placeholder="Contraseña" id="password_reg" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button  type="submit" name="login_user" class="boton">Enviar</button>   		
				      					</div>
			      					</div>
								</form>
								<form method="post" action="?c=login&a=RegisterUser">
								<?php include "config/errors.php" ?>
			      				</div>
									<div class="card-back">
										<div class="center-wrap">
											<div class="section text-center">
												<h4 class="colortitle">Registrarse</h4>
													
												<div class="form-group mt-2">
													<input type="text" name="usuario_reg" class="form-style" placeholder="Usuario" id="logusuario" autocomplete="off" value="<?php echo $data["userR"]; ?>">
													<i class="input-icon uil uil-at"></i>
												</div>	
												<div class="form-group mt-2">
													<input type="password" name="password_reg" class="form-style" placeholder="Contraseña" id="logpass" autocomplete="off">
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<button  type="submit" name="reg_user" class="boton">Register</button>
												
												<?php
													require_once "../vendor/autoload.php";

													//Make object of Google API Client for call Google API
													$google_client = new Google_Client();
													
													//Set the OAuth 2.0 Client ID | Copiar "ID DE CLIENTE"
													$google_client->setClientId('173569732989-i5j1glc19l09f2bq523b2jrrlpp12c6l.apps.googleusercontent.com');
													
													//Set the OAuth 2.0 Client Secret key
													$google_client->setClientSecret('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');
													
													//Set the OAuth 2.0 Redirect URI | URL AUTORIZADO
													$google_client->setRedirectUri('http://localhost/LIS104-Proyecto/mvc/index.php?c=pedidos');
													
													// to get the email and profile 
													$google_client->addScope('email');
													
													$google_client->addScope('profile');

													
													//OPCION PARA PONER BOTON PERO NO FUNCIONA
													//echo "<input class='boton' type='button' value='Google Login' onClick='window.location.href='".$google_client->createAuthUrl()."' '>";
													echo "<a href='".$google_client->createAuthUrl()."'>Google Login</a>";
												?>
											</div>
										</div>
									</div>
								</form>
								
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</body>
</html>