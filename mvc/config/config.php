<?php
	
	define ( "CONTROLADOR_PRINCIPAL" , "Pedidos" );
	define ( "ACCION_PRINCIPAL" , "index" );
	



	//CONFIG PARA API DE INICIO DE SESION CON GOOGLE
	//start session on web page
	session_start();
	//config.php

	//Include Google Client Library for PHP autoload file
	require_once 'vendor/google/autoload.php';

	//Make object of Google API Client for call Google API
	$google_client = new Google_Client();

	//Set the OAuth 2.0 Client ID
	$google_client->setClientId('173569732989-i5j1glc19l09f2bq523b2jrrlpp12c6l.apps.googleusercontent.com');

	//Set the OAuth 2.0 Client Secret key
	$google_client->setClientSecret('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');

	//Set the OAuth 2.0 Redirect URI
	$google_client->setRedirectUri('http://localhost/LIS104-Proyecto/mvc/index.php?c=pedidos');

	// to get the email and profile 
	$google_client->addScope('email');

	$google_client->addScope('profile');


?>