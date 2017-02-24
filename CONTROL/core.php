<?php
	/*Init de la session */
	session_start();
	session_regenerate_id();

	/*Require des utilitaires MVC */
	require_once('../model/model.php');
	require_once('../vue/vue.php');
	require_once('../control/control.php');

	/*Check que l'utilisateur est bien connecté ==> redirection vers le Login!*/
	if (strpos($_SERVER['REQUEST_URI'], '/control/login')==false && Control::user_connected()==false ){
	    header("Location: login.php");
	}

?>