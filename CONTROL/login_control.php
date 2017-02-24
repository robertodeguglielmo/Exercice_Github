<?php
require_once('../control/core.php');
unset($_SESSION['ERROR_LOGIN']);
if( isset($_POST['UTILISATEUR']) && isset($_POST['CODE']) ) { 
	if( Control::auth($_POST['UTILISATEUR'], $_POST['CODE']) ) { 
		// auth okay, setup session 
		$_SESSION['UTILISATEUR'] = $_POST['UTILISATEUR']; 
		// redirect to required page 
		header( "Location: page1.php" ); 
	} else { 
		$_SESSION['ERROR_LOGIN'] ="Login incorrect";
		// didn't auth go back to loginform 
		header( "Location: login.php" ); 
	} 
} else { 
		// UTILISATEUR and CODE not given so go back to login
	$_SESSION['ERROR_LOGIN'] ="Veuillez spécifier un utilisateur et un mot de passe";
	header( "Location: login.php" ); 
}
?>