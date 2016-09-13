<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	require 'controller/mvc.controller.php';
	
	$mvc = new mvc_controller();

	if( $_GET['action'] == 'inicio' ){
			$mvc->principal();	
	}
	else if( $_GET['action'] == 'noticia' ){
			$mvc->noticia();	
	}
	else if( $_GET['action'] == 'login' ){
			$mvc->login();	
	}
	else if( $_GET['action'] == 'registrarse' ){
			$mvc->registrarse();	
	}
	else{	
		$mvc->principal();
	}
 	
?>